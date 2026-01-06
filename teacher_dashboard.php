<?php
session_start();
if ($_SESSION['role'] != 'teacher') {
    header("Location: login.php");
}
?>
<h2>Welcome Teacher: <?php echo $_SESSION['username']; ?></h2>
<a href="logout.php">Logout</a>
