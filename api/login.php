<?php
    session_start();
    include("connection.php");

    $uname = $_POST['userid'];
    $pass = $_POST['password'];
    
$check = mysqli_query($connect, "SELECT * from voter where uname='$uname' AND pass='$pass'");
$check1 = mysqli_query($connect, "SELECT * from candidate where uname='$uname' AND pass='$pass'");


    if(mysqli_num_rows($check)>0)
    { 
       
            $userdata = mysqli_fetch_array($check);
       $_SESSION['identity']=0; 
         
            $groups = mysqli_query($connect, "SELECT * from candidate");
            $groupsdata = mysqli_fetch_all($groups, MYSQLI_ASSOC);
            $_SESSION['userdata'] = $userdata;
            $_SESSION['groupsdata'] = $groupsdata;
        
        $_SESSION['id'] = $userdata['id'];
        $_SESSION['status'] = $userdata['status'];
      
        echo '<script>
                window.location = "../routes/dashboard.php";
            </script>';

    }
    elseif(mysqli_num_rows($check1)>0)
    { 
       
            $userdata = mysqli_fetch_array($check1);
         $_SESSION['identity']=1;
            
            $groups = mysqli_query($connect, "SELECT * from candidate");
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
