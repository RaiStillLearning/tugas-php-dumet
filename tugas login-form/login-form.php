<?php 
session_start();
require 'config.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(isset($users[$username]) && password_verify($password, $users[$username])) {
        $_SESSION['user'] = $username;
        header('Location:index.php');
        exit();
    } else {
        echo "Invalid username or password.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
</head>
<body>
    <form action="" method="POST" style="border: 1px solid black; padding: 20px; width: 300px; margin: auto; margin-top: 180px;">
        <h1>LOGIN</h1>
        <input type="text" name="username" placeholder="username" required>
        <input type="password" name="password" placeholder="password" required>
        <br/>
        <input type="submit" name="login" value="Login" style="margin-top: 10px; text-align: center;">
    </form>
    <?php if(isset($error)) echo '<p style="color: red;">' . $error . '</p>';?>
</body>
</html>
