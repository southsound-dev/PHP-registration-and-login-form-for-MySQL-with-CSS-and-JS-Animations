<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <link rel="stylesheet" href="./styles/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b791b9cfac.js" crossorigin="anonymous"></script>
</head>
<body>

    <div id="container">
<div class="form_container sign_in">
<form action="login.php" method="POST">
    <h1 class="grey">Log in</h1>

    <div class="rs_icons">
    <a href="#"><i class="fab fa-facebook-f"></i></a>
    <a href="#"><i class="fab fa-google"></i></a>
    <a href="#"><i class="fab fa-linkedin-in"></i></a>
    <a href="#"><i class="fab fa-github"></i></a>
    </div>
<h6 class="grey">Or enter your login details</h6>
<div class="email icon"><input type="text" id="email_in" name="email" placeholder="Email address"
value="<?php if (isset($_COOKIE['emailcookie'])) {
    echo $_COOKIE['emailcookie'];}
?>"
required/><i class="fa fa-envelope fa-sm"></i></div>
<div class="password icon"><input type="password" id="password_up" name="password" placeholder="Password"
value="<?php if (isset($_COOKIE['password'])) {
    echo $_COOKIE['password'];}
?>"
    required/><i class="fas fa-key"></i><i class="show fas fa-eye-slash" onclick="myFunction()"></i></div>
<div class="remember grey">
<input type="checkbox" id="remember" name="remember"/>
<h6>Remember me</h6>
</div>
<div class="submit">
<input type="submit" name="signin" id="btnin" value="Log in"/>
</div>
<!-- <p class="grey">Forgot your password?</p> -->
<?php
if (isset($_GET['LoginFailed'])) {
    ?>
<br>
<h6 class="blue"><i class="fas fa-exclamation-triangle"></i> Login Failed!</h6>
<?php
}
?>
</form>
</div>
<div class="form_container sign_up">
<form action="process.php" method="POST">
<h1 class="grey">Create an Account</h1>
    <div class="rs_icons">
    <a href="#"><i class="fab fa-facebook-f"></i></a>
    <a href="#"><i class="fab fa-google"></i></a>
    <a href="#"><i class="fab fa-linkedin-in"></i></a>
    <a href="#"><i class="fab fa-github"></i></a>
    </div>
<h6 class="grey">Or enter your personal details</h6>
<div class="user icon"><input type="text" id="user" name="user" placeholder="Full Name" required/><i class="fa fa-user fa-sm"></i></div>
<div class="email icon"><input type="text" id="email_up" name="email" placeholder="Email address" required/><i class="fa fa-envelope fa-sm"></i></div>
<div class="phone icon"><input type="text" id="phone" name="phone" placeholder="Phone number" required/><i class="fa fa-phone fa-sm"></i></div>
<div class="password icon"><input type="password" id="password" name="password" placeholder="Create password" required/><i class="fas fa-key"></i><i class="show fas fa-eye-slash" onclick="myFunction()"></i></div>
<div class="password icon"><input type="password" id="cpassword" name="cpassword" placeholder="Repeat password" required/><i class="fas fa-key"></i><i class="show fas fa-eye-slash" onclick="myFunction2()"></i></div>
<div class="submit">
<input type="submit" name="signup" id="btnup" value="Sign up"/>
</div>
<?php
if (isset($_GET['password_error'])) {

    ?>
    <script> container.classList.add("right-panel-active") </script>
<br>
<div class="error">
<h6 class="blue"><i class="fas fa-exclamation-triangle"></i> Password must be have minimum of 8 characters with at least 1 number and one uppercase and one lowercase character</h6>
</div>
<?php
} if (isset($_GET['invalid_email'])) {
  ?>
  <script> container.classList.add("right-panel-active") </script>
  <div class="error">
<h6 class="blue"><i class="fas fa-exclamation-triangle"></i> Invalid email!</h6>
</div>
  <?php
}if (isset($_GET['email_exists'])) {
  ?>
  <script> container.classList.add("right-panel-active") </script>
  <div class="error">
<h6 class="blue"><i class="fas fa-exclamation-triangle"></i> Email Exists!</h6>
</div>
  <?php
} if (isset($_GET['password_match'])) {
  ?>
  <script> container.classList.add("right-panel-active") </script>
  <div class="error">
<h6 class="blue"><i class="fas fa-exclamation-triangle"></i> Passwords are not matching!</h6>
</div>
  <?php
}
?>
</form>
</div>
<div class="overlay_container">
<div class="overlay">
    <div class="overlay_panel overlay_left">
    <h1>Welcome Back!</h1>
    <p>Please login with your personal details</p>
    <button id="signIn" type="button" class="overlay_button">Log In</button>
    </div>
    <div class="overlay_panel overlay_right">
    <h1>Hello dear Friend!</h1>
    <p>Do you want to become part of our community?</p>
    <button id="signUp" type="button" class="overlay_button">Sign Up</button>
    <button id="signInMobile" type="button" class="overlay_button">Log In</button>
    </div>
    </div>
</div>
</div>
<footer><span class="signature">Made with ❤️&nbsp by <a href="https://twitter.com/southsound_dev">@Southsound_dev</a></span>
</footer>



<script>
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const signInButtonMobile = document.getElementById('signInMobile');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
  container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
  container.classList.remove("right-panel-active");
});

signInButtonMobile.addEventListener('click', () => {
  container.classList.add("mobile");
});

function myFunction() {
  var x = document.getElementById("password_up");
  var y = document.getElementById("password");


  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  };
  if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
  };}

  function myFunction2() {
    var z = document.getElementById("cpassword");
  if (z.type === "password") {
    z.type = "text";
  } else {
    z.type = "password";
  }
};


    </script>

</body>
</html>
