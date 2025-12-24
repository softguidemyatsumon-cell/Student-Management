<?php
require("db_connection.php");
session_start();
if(isset($_POST['login'])){
  $username =$_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM login WHERE username = '$username' AND password ='$password'";

  $result =mysqli_query($conn,$sql);
  $row =mysqli_fetch_array($result, MYSQLI_ASSOC);
  if($row['role']=="admin"){

    $_SESSION['username'] = $username;
    $_SESSION['role'] = "admin";

    header("location:admin/admin_dashboard.php");
      
    }else if($row['role']=="teacher"){
    $_SESSION['username'] = $username;
    $_SESSION['role'] = "teacher";

    header("location:teacher/teacher_dashboard.php");

    }else if($row['role']=="student"){
    $_SESSION['username'] = $username;
    $_SESSION['role'] = "student";

    header("location:student/student_dashboard.php");
    }
      
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Responsive Login</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">

  <style>

  </style>
</head>
<body class="d-flex justify-content-center align-items-center vh-100">

  <form method="post" class="login-box p-4" >
    <h2 class="text-center mb-4">Account Login</h2>

    <div class="mb-3">
      <label class="form-label">Username</label>
      <input type="text" class="form-control" placeholder="Enter username" name="username" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Password</label>
      <input type="password" class="form-control" placeholder="Enter password" name="password" required>
    </div>

    <button type="submit" class="btn btn-primary w-100" name="login">Login</button>
  </form>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</script>
</html>
