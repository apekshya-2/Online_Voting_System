<?php
session_start();
include"./connection.php";

if(isset($_POST['submit'])){
    $email=$_POST['username'];
    $pwd=$_POST['password'];
    $pwdHash=sha1($pwd);

    $sql = "SELECT id, fname, password FROM `final_OVS` WHERE email='$email'";

    $res=mysqli_query($conn,$sql);

    if(!$res): $_SESSION['msg']="Username/Email not found";
    else:
        while($row=mysqli_fetch_assoc($res)){
            if($pwdHash==$row['password']) {
                $_SESSION['login']=true;
                $_SESSION['login_user_id']=$row['id'];
                $_SESSION['login_user_fname']=$row['fname'];
                $_SESSION['msg']="Welcome to the dashboard";
                header("location:../list.php");//redirect to dashboard page
                
            }else {
                $_SESSION['msg'] = "Password not matched!";
                header("Location: ../index.php");  // Redirect back to login
                
            } 
        }
    endif;
}
