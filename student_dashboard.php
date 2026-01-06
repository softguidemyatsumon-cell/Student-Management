<?php
session_start();
if ($_SESSION['role'] != 'student') {
    header("Location: login.php");
}
?>
<h2>Welcome Student: <?php echo $_SESSION['username']; ?></h2>
<a href="logout.php">Logout</a>
