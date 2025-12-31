<?php
session_start();
$page = $_GET['page'] ?? 'home';

$allowed_pages = ['home','users','reports','settings'];
if (!in_array($page, $allowed_pages)) {
    $page = 'home';
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="d-flex">

    <!-- Sidebar -->
    <aside class="bg-dark text-white p-3" style="width:250px;">
        <a href="?page=home" class="d-block mb-2 text-decoration-none btn btn-outline-danger <?= $page=='home'?'active':'' ?>">Dashboard</a>
        <a href="?page=users" class="d-block mb-2 text-decoration-none btn btn-outline-danger <?= $page=='users'?'active':'' ?>">Users</a>
        <a href="?page=reports" class="d-block mb-2 text-decoration-none btn btn-outline-danger <?= $page=='reports'?'active':'' ?>">Reports</a>
        <a href="?page=settings" class="d-block mb-2 text-decoration-none btn btn-outline-danger <?= $page=='settings'?'active':'' ?>">Settings</a>
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
