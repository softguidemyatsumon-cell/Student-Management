<?php
session_start();
$page = $_GET['page'] ?? 'home';

$allowed_pages = ['home','addstudent','addteacher','student_dashboard','teacher_dashboard'];
if (!in_array($page, $allowed_pages)) {
    $page = 'home';
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <style>
          body {
            min-height: 100vh;
        }
        .sidebar {
            min-height: 100vh;           
        }
        
        .sidebar a:hover {
            background: rgba(255,255,255,0.1);
        }
    </style>

</head>
</head>
<body>
    <div class="d-flex">

    <!-- Sidebar -->
    <aside class="sidebar bg-success text-white p-3" style="width:250px;">
        <a href="?page=home" class="d-block mb-2 text-decoration-none btn btn-outline-warning <?= $page=='home'?'active':'' ?>"><i class="bi bi-speedometer2 me-2"></i>Dashboard</a>        
        <a href="?page=teacher_dashboard" class="d-block mb-2 text-decoration-none btn btn-outline-warning <?= $page=='teacher_dashboard'?'active':'' ?>"><i class="bi bi-speedometer2 me-2"></i>Teacher Dashboard</a>
         <a href="?page=student_dashboard" class="d-block mb-2 text-decoration-none btn btn-outline-warning <?= $page=='student_dashboard'?'active':'' ?>"><i class="bi bi-speedometer2 me-2"></i>Student Dashboard</a>
         <a href="?page=addteacher" class="d-block mb-2 text-decoration-none btn btn-outline-warning <?= $page=='addteacher'?'active':'' ?>"><i class="bi bi-people me-2"></i>Add Teachers</a>
        <a href="?page=addstudent" class="d-block mb-2 text-decoration-none btn btn-outline-warning <?= $page=='addstudent'?'active':'' ?>"><i class="bi bi-people me-2"></i>Add Students</a>
        
    </aside>

    <!-- Content -->
    <main class="p-4 flex-grow-1">

        <?php
        include "pages/$page.php";
        ?>

    </main>

</div>
</body>
</html>














