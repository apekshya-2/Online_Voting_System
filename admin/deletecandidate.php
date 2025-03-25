<?php
include '../api/connection.php';
if (isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "DELETE from candidate WHERE id = $id";
    $result=mysqli_query($connect,$sql);
       $sql2 = "DELETE from result WHERE id = $id";
    $result2=mysqli_query($connect,$sql2);
    if($result){
        header('location:../admin/candidatespanel.php');
    }}
?>