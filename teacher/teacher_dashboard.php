        <?php
include "../db_connection.php";

// $total = $conn->query("SELECT COUNT(*) AS t FROM student")->fetch_assoc()['t'];
$students = $conn->query("SELECT * FROM student");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <style>
        body {
            min-height: 100vh;
        }
        .sidebar {
            width: 250px;
            min-height: 100vh;
            position: fixed;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
        }
        .sidebar a {
            color: #fff;
            text-decoration: none;
        }
        .sidebar a:hover {
            background: rgba(255,255,255,0.1);
        }
    </style>
</head>
<body>
<div class="sidebar bg-success p-3">
    <h4 class="text-white text-center mb-4">Teacher Panel</h4>

    <ul class="nav nav-pills flex-column">
       
        <li class="nav-item mb-2">
            <a href="dashboard.php" class="nav-link text-white"><i class="bi bi-speedometer2 me-2"></i>Teacher Dashboard</a>
        </li>
        <li class="nav-item mb-2">
            <a href="../teacher/teacher_create.php" class="nav-link text-white"><i class="bi bi-people me-2"></i>Add Teacher</a>
        </li>
        
        <li class="nav-item mt-2">
            <a href="../login.php" class="nav-link text-warning fw-bold"><i class="bi bi-box-arrow-right me-2"></i>Logout</a>
        </li>
    </ul>
</div>
<div class="content">

<div class="container mt-4">
    <div class="d-flex mb-2">
        <div class="me-auto p-2">
                <h4>Student List</h4>
        </div>
        <div class="p-2">
            <a href="../index.php" class="btn btn-success">Back</a>
        </div>
        <div class="p-2">
            <a href="student/student_create.php" class="btn btn-success">+ Add Student</a>
        </div>
    </div>


    <table class="table table-bordered table-hover mt-2 bg-white">
        <thead class="table-primary">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
            
        </tr>
        </thead>

        <?php while ($row = $students->fetch_assoc()): ?>
        <tr>
            <td><?= $row['name'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['phone'] ?></td>
            
            <td>
                <a href="./student/student_update.php ?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                <a href="./student/student_delete.php ?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete?');" >Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>

</div>
</div>

</body>
</html>