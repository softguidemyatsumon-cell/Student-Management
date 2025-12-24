<?php
    require_once("./db_connection.php");
    if(isset($_POST['register'])){
        $name = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        $passwordhash = password_hash($password, PASSWORD_DEFAULT);
        // $confirmPasswordhash = password_hash($confirmPassword, PASSWORD_DEFAULT);
        

        $sql = "INSERT INTO register (username, email, password, confirmPassword)VALUES('$name','$email','$passwordhash', '$confirmPassword')";
        if(mysqli_query($conn,$sql)){
            header("location:student_table.php");
        }else{
            echo "Query Failed..." .mysqli_error($conn);
        }
    }
    
?>

<!DOCTYPE html>
    <html lang="en">
  <head>
      <meta charset="UTF-8">  
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Register</title>

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="style.css">

  </head>
  <body class="d-flex justify-content-center align-items-center vh-100">

    <form method="post" class="login-box p-4" >
      <h2 class="text-center mb-4">Register</h2>

        <div class="mb-3">
          <label class="form-label">Username</label>
          <input type="text" class="form-control" placeholder="Enter username" name="username" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="text" class="form-control" placeholder="Enter username" name="email" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" class="form-control" placeholder="Enter password" name="password" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Confirm Password</label>
          <input type="password" class="form-control" placeholder="Enter password" name="confirmPassword" required>
        </div>

        <button type="submit" class="btn btn-primary w-100" name="register">Register</button>
    </form>

  </body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>
