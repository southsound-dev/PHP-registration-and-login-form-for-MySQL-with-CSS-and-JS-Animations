<?php
session_start();
include 'dbcon.php';


$email = $_POST['email'];
$password = $_POST['password'];


$email = stripcslashes($email);


$result = mysqli_query($con, "SELECT * FROM users WHERE email = '$email'");
$row = mysqli_fetch_array($result);

if ($row !== null && $row['email'] == $email && password_verify($password, $row['password'])) {
    $_SESSION['user'] = $row['username'];
    header('location:home.php');

    if(isset($_POST['remember'])){
        setcookie('emailcookie',$email,time()+86400);
        setcookie('password',$password,time()+86400);

    }
} else {
    header('location:index.php?LoginFailed=Login');
}
?>