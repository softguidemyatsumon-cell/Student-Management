<?php
require_once("./db_connection.php");
$id = $_GET['id'];

$sql = "DELETE FROM teacher WHERE id= $id";
if(mysqli_query($conn,$sql)){
    header("location:teacher_table.php");
}else{
    echo "delete failed" .mysqli_error($conn);
}

?>