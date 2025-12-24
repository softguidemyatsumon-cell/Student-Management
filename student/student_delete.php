<?php
require_once("../db_connection.php");
$id = $_GET['id'];

$sql = "DELETE FROM student WHERE id= $id";
if(mysqli_query($conn,$sql)){
    header("location:../dashboard.php");
}else{
    echo "delete failed" .mysqli_error($conn);
}

?>