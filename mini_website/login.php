<?php
require 'session.php';
require 'pdo.php';


$error = false;
// I am checking if the form has been submitted
if (isset($_POST['login_form'])) {

    // We try to get a user matching with the email given in the form
    $query = $pdo->prepare("SELECT * FROM user WHERE email = :email");
    $query->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
    $query->execute();
    $user = $query->fetch(PDO::FETCH_ASSOC);

    // password_verify will check if the password is matching with the hash
    if ($user && password_verify($_POST['password'], $user['password'])) {
        //We want to save data in the session
        $_SESSION['user_email'] = $_POST['email'];
        //We redirect the user to the homepage
        header('Location: index.php');
    } else {
        $error = 'incorrect email or password';
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
    <h1>Login</h1>

    <form action="" method="post">
        <p>
            <input type="email" name="email" placeholder="Enter your email">
        </p>
        <p>
            <input type="password" name="password" placeholder="Enter your password">
        </p>
        <input type="submit" value="Log in" name="login_form">
    </form>
    <?php
    if ($error) {
        echo $error;
    }
    ?>


    <?php require 'footer.php' ?>
</body>

</html>