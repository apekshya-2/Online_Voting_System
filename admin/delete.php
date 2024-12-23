<?php
session_start();
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="DELETE FROM `online voting` WHERE id=$id";
    include "./connection.php";
    $res=mysqli_query($conn,$sql);
    if($res) $_SESSION['msg']="User deleted successfully.";
    else $_SESSION['msg']="User deletion failed";
}
header("location: ./list.php");