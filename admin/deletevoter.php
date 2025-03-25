<?php
include '../api/connection.php';
if (isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "DELETE from voter WHERE id = $id";
    $result=mysqli_query($connect,$sql);
    if($result){
        header('location:../admin/voterspanel.php');
    }}
?>