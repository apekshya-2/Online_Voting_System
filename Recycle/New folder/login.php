<?php
    session_start();
    include("connection.php");

    $uname = $_POST['userid'];
    $pass = $_POST['password'];
    

$check = mysqli_query($connect, "SELECT * from user where uname='$uname' AND pass='$pass'");
  
    if(mysqli_num_rows($check)>0)
    { 
       
            $userdata = mysqli_fetch_array($check);
            //select * chaiyo!
            $groups = mysqli_query($connect, "SELECT * from user WHERE roles='candidate'");
            $groupsdata = mysqli_fetch_all($groups, MYSQLI_ASSOC);
            $_SESSION['userdata'] = $userdata;
            $_SESSION['groupsdata'] = $groupsdata;
        
        $_SESSION['id'] = $userdata['id'];
        $_SESSION['status'] = $userdata['status'];
        
        echo '<script>
                window.location = "../routes/dashboard.php";
            </script>';

    }

else{
        echo '<script>
                alert("Invalid credentials!");
                window.location = "../";
            </script>';
}
?>