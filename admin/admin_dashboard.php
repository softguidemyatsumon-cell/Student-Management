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
<div class="sidebar bg-dark p-3">
    <h4 class="text-white text-center mb-4">Admin Panel</h4>

    <ul class="nav nav-pills flex-column">
        <li class="nav-item mb-2">
            <a href="dashboard.php" class="nav-link text-white"><i class="bi bi-speedometer2 me-2"></i>Teacher Dashboard</a>
        </li>
        <li class="nav-item mb-2">
            <a href="student/student_create.php" class="nav-link text-white"><i class="bi bi-people me-2"></i>Add Teacher</a>
        </li>
        <li class="nav-item mb-2">
            <a href="dashboard.php" class="nav-link text-white">Students Dashboard</a>
        </li>
        <li class="nav-item mb-2">
            <a href="student/student_create.php" class="nav-link text-white">Add Student</a>
        </li>
        
        <li class="nav-item mt-4">
            <a href="logout.php" class="nav-link text-danger">Logout</a>
        </li>
    </ul>
</div>
<div class="content">

    <h2>Dashboard</h2>

    <div class="row mt-4">
        <div class="col-md-3">
            <div class="card text-bg-primary">
                <div class="card-body text-center">
                    <h6>Total Students</h6>
                    <h2>120</h2>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-bg-success">
                <div class="card-body text-center">
                    <h6>Courses</h6>
                    <h2>8</h2>
                </div>
            </div>
        </div>
    </div>

</div>

</body>
</html>