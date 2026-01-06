<?php
require("db_connection.php");
session_start();

$errorName = $errorPassword = $loginError = "";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // 1. Basic Validation: Check if fields are empty
    if (empty($username)) {
        $errorName = "Please Fill Name Field!";
    }
    if (empty($password)) {
        $errorPassword = "Please Fill Password Field!";
    }

    // 2. Database Check (Only if fields aren't empty)
    if (!empty($username) && !empty($password)) {

        // Note: Using variables directly in SQL is prone to SQL Injection. 
        // For a production app, use Prepared Statements.
        $sql = "SELECT * FROM users WHERE name = '$username' AND password ='$password'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        
        //  if(mysqli_query($conn,$sql)){
        //     header("location:contact.php");
        // }else{
        //     echo "Query Failed..." .mysqli_error($conn);
        // }

        if ($row) { // This check fixes the "null" error
            $_SESSION['username'] = $username;
            $_SESSION['role'] = $row['role'];
         
            if ($row['role'] == "admin") {
                header("location:admin_dashboard.php");
            } else if ($row['role'] == "teacher") {
                header("location:teacher_dashboard.php");
            } else if ($row['role'] == "student") {
                header("location:student_dashboard.php");
            }
            exit();
        } else {
             $loginError = "Invalid Username or Password!";
            // // echo "$loginError";
            // echo "<h6  class='alert alert-danger' role='alert'>Login Failed! Try Again</h6>";
        }
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
   <form method="post" class="login-box p-4">
    <h2 class="text-center mb-4">Account Login</h2>

        <?php if($loginError): ?>
        <div class="alert alert-danger"><?php echo $loginError; ?></div>
    <?php endif; ?>

    <div class="mb-3">
      <label class="form-label">Username</label>
      <input type="text" class="form-control" placeholder="Enter username" name="username">
      <span class="text-danger"><?php echo $errorName?></span>
    </div>

    <div class="mb-3">
      <label class="form-label">Password</label>
      <input type="password" class="form-control" placeholder="Enter Password" name="password">
      <span class="text-danger"><?php echo $errorPassword?></span>
    </div>

    <button type="submit" class="btn btn-primary w-100" name="login">Login</button>
  </form>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</script>

</html>