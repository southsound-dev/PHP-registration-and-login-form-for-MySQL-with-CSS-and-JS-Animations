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
    <div id="container" class="index">
        <?php
                session_start();
        if(isset($_SESSION['user'])){
            echo "<div class='center'><h2>Hello  ${_SESSION['user']}!</h2><a class='logout' href='logout.php?logout'>Log out</a></div>";
        } else {
            echo "Error";
        }

       ?>

</div>

<footer><span class="signature">Made with ❤️&nbsp by <a href="https://twitter.com/southsound_dev">@Southsound_dev</a></span>
</Footer>



</body>
</html>
