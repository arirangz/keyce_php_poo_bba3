<?php

$user = ['first_name' => 'John', 'last_name' => 'Doe'];

function hello(array $user):void
{
    echo $user['first_name'].' '.$user['last_name'];
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
    <?php
        hello($user);
    ?>
</body>
</html>