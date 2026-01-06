<?php
session_start();
if ($_SESSION['role'] != 'admin') {
    header("Location: login.php");
}

$page = $_GET['page'] ?? 'home';

$allowed_pages = ['home','teacher_view','student_view','course_view'];
if (!in_array($page, $allowed_pages)) {
    $page = 'home';
}
$page_file = __DIR__ . "/pages/$page.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


</head>
<body>

<div class="d-flex">

    <!-- Sidebar -->
    <aside class="bg-success text-white p-3 vh-100" style="width:250px;">
        <a href="?page=home" class="d-block mb-2 text-decoration-none btn btn-outline-warning <?= $page=='home'?'active':'' ?>"><i class="fa-solid fa-gauge me-2"></i>Dashboard</a>
        
        <a href="?page=teacher_view" class="d-block mb-2 text-decoration-none btn btn-outline-warning <?= $page=='teacher_view'?'active':'' ?>"><i class="fa-solid fa-user-group me-2"></i>Teachers</a>
        <a href="?page=student_view" class="d-block mb-2 text-decoration-none btn btn-outline-warning <?= $page=='student_view'?'active':'' ?>"><i class="fa-solid fa-user-group me-2"></i>Students</a>
        <a href="?page=course_view" class="d-block mb-2 text-decoration-none btn btn-outline-warning <?= $page=='course_view'?'active':'' ?>"><i class="fa-solid fa-layer-group me-2"></i>Courses</a>

        <a href="logout.php" class="d-block mb-2 text-decoration-none btn btn-danger"><i class="fa-solid fa-right-from-bracket me-2"></i>Logout</a>
        
    </aside>

    <!-- Content -->
    <main class="p-4 flex-grow-1">

           <?php
        if (file_exists($page_file)) {
            include $page_file;
        } else {
            include __DIR__ . "/pages/home.php";
        }
        ?>

    </main>

</div>

</body>
</html>

