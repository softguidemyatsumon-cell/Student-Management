<?php
include "db_connection.php";

// $total = $conn->query("SELECT COUNT(*) AS t FROM student")->fetch_assoc()['t'];
$students = $conn->query("SELECT * FROM student");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Management Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <span class="navbar-brand">Student Dashboard</span>
    </div>
</nav>

<div class="container mt-4">

    <!-- <div class="row">
        <div class="col-md-3">
            <div class="card text-bg-primary">
                <div class="card-body text-center">
                    <h6>Total Students</h6>
                    
                </div>
            </div>
        </div>
    </div> -->
 

    <div class="d-flex mb-2">
        <div class="me-auto p-2">
                <h4>Student List</h4>
        </div>
        <div class="p-2">
            <a href="./admin/admin_dashboard.php" class="btn btn-success">Back</a>
        </div>
        <div class="p-2">
            <a href="student/student_create.php" class="btn btn-success">+ Add Student</a>
        </div>
    </div>


    <table class="table table-bordered table-hover mt-2 bg-white">
        <thead class="table-dark">
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

</body>
</html>
