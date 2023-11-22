<?php
require 'session.php';
require 'pdo.php';


$query = $pdo->prepare("SELECT * FROM user");
$query->execute();
$users= $query->fetchAll(PDO::FETCH_ASSOC);

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
    <h1>Members</h1>

    <?php foreach($users as $user) { ?>
        <p><?php echo $user['first_name'] ?></p>
    <?php } ?>
    
    <?php require 'footer.php' ?>
</body>

</html>