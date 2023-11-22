<?php
require 'session.php';
require 'pdo.php';
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
    <h1>Contact</h1>

    <?php if (isset($_POST['contact_form'])) { ?>
    <h2>Thank you for your message <?php echo $_POST['nickname'];?></h2>
    <?php } ?>
    <form action="" method="post">
        <p>
            <input type="text" name="nickname" placeholder="Enter your nickname">
        </p>
        <p>
            <input type="email" name="email" placeholder="Enter your email">
        </p>
        <input type="submit" value="Send" name="contact_form">
    </form>
    <?php require 'footer.php' ?>
</body>
</html>