<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <h1 class="ms-5">Student Management</h1>
    <a href="teacher_table.php" style="margin-left: 50px; background-color: green; padding:5px; border-radius: 5px; color:white; text-decoration:none">Teacher Lists</a><br><br>
    <div class="card ms-5" style="width:300px">
        <div class="card-body">
        <form action="" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" required> <br>

        <label for="address">Email</label>
        <input type="text" name="email" id="address"class="form-control" required><br>

        <label for="phone">Phone</label>
        <input type="number" name="phone" id="phone"class="form-control" required><br>
       

        <button type="submit" class="btn bg-success text-white float-end" name="btnAdd">Add</button>

    </form>
        </div>
    </div>
    

    <?php
    require_once("./db_connection.php");
    if(isset($_POST['btnAdd'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

        $sql = "INSERT INTO teacher (name, phone, email)VALUES('$name','$phone','$email')";
        if(mysqli_query($conn,$sql)){
            header("location:teacher_table.php");
        }else{
            echo "Query Failed..." .mysqli_error($conn);
        }
    }
    
    ?>

</body>
</html>