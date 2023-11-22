<?php
session_start();



    if (isset($_POST['login_form'])) {
        if ($_POST['username'] === 'admin' &&  $_POST['password'] === 'XD2Ka@') {
            $_SESSION['username'] = $_POST['username'];
        } else {

        }
    }
    var_dump($_SESSION);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 12</title>
</head>
<body>
    <h1>Exercise 12</h1>
    <form action="" method="post">
        <p>
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
        </p>
        <p>
            <label for="password">password</label>
            <input type="text" name="password" id="password">
        </p>
        <input type="submit" value="Login" name="login_form">
    </form>
</body>
</html>