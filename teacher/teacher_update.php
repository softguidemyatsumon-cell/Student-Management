<?php
    require("db_connection.php");

/* Step 1: Check ID */
if (!isset($_GET['id'])) {
    die("Teacher ID not provided");
}

/* Step 2: Get ID */
$id = $_GET['id'];

/* Step 3: Fetch student */
$sql = "SELECT * FROM teacher WHERE id = $id";
$query = mysqli_query($conn, $sql);

/* Step 4: Define $data */
$data = mysqli_fetch_assoc($query);

/* Step 5: Validate data */
if (!$data) {
    die("Teacher not found");
}


    
    // $id =$_GET['id'];
    // $sql = "SELECT * FROM student WHERE id=$id ";

    // $query = mysqli_query($conn,$sql);
    // $data = mysqli_fetch_assoc($query);
        
    
        if(isset($_POST['updateBtn'])){
        $teacherId =$_POST['teacherId'];
        $name =$_POST['name'];
        $phone =$_POST['phone'];
        $email =$_POST['email'];
        $updatesql = "UPDATE teacher 
              SET name='$name', phone='$phone', email='$email'
              WHERE id=$teacherId";

        // $updatesql = "UPDATE teacher SET name='$name', phone='$phone', email='$email', WHERE id=$teacherId";
        if(mysqli_query($conn,$updatesql)){
            header("location:teacher_table.php");
        }else{
            echo "update error..." .mysqli_error($conn);
        }
        }
    ?>
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
        <form action="" method="POST">
            <input type="hidden" name="teacherId" id="id" value="<?php echo  $data['id']?>" required>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required value="<?php echo $data['name'] ?>"> <br>
            
            <label for="phone">Phone</label>
            <input type="number" name="phone" id="phone"class="form-control" required value="<?php echo $data['phone'] ?>"><br>

            <label for="email">Email</label>
            <input type="text" name="email" id="email"class="form-control" required value="<?php echo $data['email'] ?>"><br>

            <button type="submit" class="btn bg-success text-white float-end" name="updateBtn">Update</button>

        </form>
            </div>
        </div>

        
    </body>
    </html>