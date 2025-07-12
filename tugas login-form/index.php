<?php 
session_start();
if(!isset($_SESSION['user'])) {
    header('Location: login-form.php');
    exit();
}
echo "Weclome to dashboard " .$_SESSION['user'] . " !";
?>

<a href="logout.php">LOGOUT</a>