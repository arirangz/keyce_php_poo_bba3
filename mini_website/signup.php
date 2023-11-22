<?php
require 'session.php';
require 'pdo.php';


if (isset($_POST['signup_form'])) {
    $query = $pdo->prepare("INSERT INTO user (first_name, last_name, email, password)
                            VALUES (:first_name, :last_name, :email, :password)");
    $query->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
    $query->bindValue(':password', password_hash($_POST['password'], PASSWORD_DEFAULT), PDO::PARAM_STR);
    $query->bindValue(':first_name', $_POST['first_name'], PDO::PARAM_STR);
    $query->bindValue(':last_name', $_POST['last_name'], PDO::PARAM_STR);
    $result = $query->execute();

    // if result is true, then we want to redirect to login
    if ($result) {
        header('Location: login.php');
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php require 'menu.php' ?>
    <h1>Sign-up form</h1>

    <form action="" method="post">
        <p>
            <label for="first_name">First name</label>
            <input id="first_name" type="first_name" name="first_name" placeholder="Enter your first name">
        </p>
        <p>
            <label for="last_name">Last name</label>

            <input id="last_name" type="last_name" name="last_name" placeholder="Enter your last name">
        </p>
        <p>
            <label for="email">email</label>

            <input id="email" type="email" name="email" placeholder="Enter your email">
        </p>
        <p>
            <label for="password">password</label>

            <input id="password" type="password" name="password" placeholder="Enter your password">
        </p>
        <input type="submit" value="Sign-up" name="signup_form">
    </form>


    <?php require 'footer.php' ?>
</body>

</html>