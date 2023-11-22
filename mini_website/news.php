<?php
require 'session.php';
require 'pdo.php';


$query = $pdo->prepare("SELECT * FROM article");
$query->execute();
$articles= $query->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
</head>

<body>
    <?php require 'menu.php' ?>
    <h1>News</h1>

    <?php foreach($articles as $article) { ?>
        <p>
            <a href="article.php?id=<?php echo $article['id'] ?>"><?php echo $article['title'] ?></a>
            
        </p>
    <?php } ?>
    
    <?php require 'footer.php' ?>
</body>

</html>