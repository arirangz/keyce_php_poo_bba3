<?php
require 'session.php';
require 'pdo.php';

// We are doing a mysql query to get a specific article
$query = $pdo->prepare("SELECT * FROM article WHERE id = :id");
// We replace the parameter :id by the one in the url (get)
$query->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
$query->execute();
$article = $query->fetch(PDO::FETCH_ASSOC);


if (isset($_POST["newComment"])) {
    $query = $pdo->prepare("INSERT INTO comment (comment, user_id, article_id)
                            VALUES (:comment, :user_id, :article_id)");
    $query->bindValue(':comment', $_POST['comment'], PDO::PARAM_STR);
    $query->bindValue(':article_id', $_GET['id'], PDO::PARAM_INT);
    $query->bindValue(':user_id', 1, PDO::PARAM_INT);
    $query->execute();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $article['title'] ?></title>
</head>

<body>
    <?php require 'menu.php' ?>
    <h1><?php echo $article['title'] ?></h1>

    <!-- nl2br will add some br for each line break -->
    <p><?php echo nl2br($article['description']) ?></p>


    <h2>New comment</h2>
    <?php if (isset($_SESSION['user_email'])) { ?>
        <form action="" method="post">
            <p>
                <label for="comment">Comment</label><br>
                <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
            </p>
            <p>
                <input type="submit" value="Save" name="newComment">
            </p>
        </form>
    <?php } else { ?>
        <p>You must be logged in to post a comment</p>

    <?php } ?>


    <?php require 'footer.php' ?>
</body>

</html>