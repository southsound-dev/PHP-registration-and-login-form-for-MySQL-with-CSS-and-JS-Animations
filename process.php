<?php
session_start();
include 'dbcon.php';
if (isset($_POST['signup'])){
$username = trim(mysqli_real_escape_string($con, $_POST['user']));
$email = trim(mysqli_real_escape_string($con, $_POST['email']));
$phone = trim(mysqli_real_escape_string($con, $_POST['phone']));
$password = mysqli_real_escape_string($con, $_POST['password']);
$cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

$regex_phone = "/\+(9[976]\d|8[987530]\d|6[987]\d|5[90]\d|42\d|3[875]\d|
2[98654321]\d|9[8543210]|8[6421]|6[6543210]|5[87654321]|
4[987654310]|3[9643210]|2[70]|7|1)\d{1,14}$/";
$reg1 = "";
$reg2 = "";
$phone = preg_replace($regex_phone,$reg1,$reg2);
$pass = password_hash($password, PASSWORD_BCRYPT);
$cpass = password_hash($cpassword, PASSWORD_BCRYPT);
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);

$emailquery = "SELECT * FROM users WHERE email LIKE '$email' ";
$query = mysqli_query($con,$emailquery);
$emailcount = mysqli_num_rows($query);

if(!$uppercase || !$lowercase || !$number || strlen($password) < 8) {
    // "Password must be have minimum of 8 characters
    // with at least 1 number and one uppercase and one lowercase character";
    header('location:index.php?password_error=password');
} else {
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    // "Invalid email!";
    header('location:index.php?invalid_email=email');
  } else {
if ($emailcount > 0) {
    // "email already exists";
    header('location:index.php?email_exists=email');
} else {
    if ($password === $cpassword) {
        $insertquery = "INSERT INTO users (username, email, phone, password, cpassword) 
        values('$username','$email','$phone','$pass','$cpass') ";
        $iquery = mysqli_query($con, $insertquery);
        if($iquery){
$_SESSION['user'] = $_POST['user'];
header('location:home.php');

        } else {
            ?>
            <script>
            alert("Inserted Unsucessfully");
        </script>
        <?php 
        }
    } else {
        // "passwords are not matching";
        header('location:index.php?password_match=password');
    }
}
} 
}
}
