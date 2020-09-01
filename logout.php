<?php
session_start();
if (isset($_GET['logout'])) {
    session_destroy();
    header('location:index.php');
    // setcookie('emailcookie', time() - 86400);
    // setcookie('password', time() - 86400);
    ?>
    <script>
    alert("Log out Sucessful");
</script>
<?php
}
