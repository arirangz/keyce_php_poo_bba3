<?php
if (isset($_SESSION['user_email'])) {
    echo 'Connected user: ' . $_SESSION['user_email'];
}
?>
<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="members.php">Members</a></li>
        <li><a href="news.php">News</a></li>

        <?php if (isset($_SESSION['user_email'])) { ?>
            <li><a href="logout.php">Logout</a></li>
        <?php } else { ?>
            <li><a href="login.php">Login</a></li>
            <li><a href="signup.php">Sign-up</a></li>

        <?php } ?>
    </ul>
</nav>