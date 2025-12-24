<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <h1 id="main_title">STUDENT LISTS</h1>
    
    <div class="container mt-3">
        <!-- <h2>ALL Student</h2> -->
        <a href="../dashboard.php" style="background-color: green; padding:5px; border-radius: 5px; color:white; text-decoration:none">Add Student</a> <br><br>
        <table class="table table-hover table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                 include("../db_connection.php");   
                $query ="SELECT * FROM student";
                $result = mysqli_query($conn,$query);
                if(!$result){
                    die("query failed".mysqli_error($conn));
                }else{
                    while($row = mysqli_fetch_assoc($result)){
                        
                            ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td>
                                <a href="student_update.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Update</a>
                                <a href="student_delete.php?id=<?php echo $row['id']; ?>" 
                                onclick="return confirm('Are you sure you want to delete?');" class="btn btn-danger">
                                Delete
                                </a>
                               

                                <!-- <a href="delete.php">Delete</a> -->
                            </td>
                        </tr>
                        <?php
                    }
                }
                
                ?>
                
            </tbody>
        </table>
  </div>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>