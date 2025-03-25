<?php
    session_start();
    include("connection.php");
 $var;
    $votes=$_POST['gvotes'];
    $total_votes=$votes+1;
    $gid=$_POST['gid'];
    $uid=$_SESSION['userdata']['id'];
    
    $update_votes=mysqli_query($connect, "UPDATE candidate SET votes='$total_votes' WHERE id='$gid'");
   $update_votes1=mysqli_query($connect, "UPDATE result SET votes='$total_votes' WHERE id='$gid'");
    $update_status=mysqli_query($connect, "UPDATE voter SET status=1 WHERE id='$uid'");
   
   if($_SESSION['identity']==1){
    $update_status1=mysqli_query($connect, "UPDATE candidate SET status=1 WHERE id='$uid'");
     $update_status2=mysqli_query($connect, "UPDATE result SET status=1 WHERE id='$uid'");
   }
   $var=$update_status || $update_status1;
    if($var && $update_votes){
        $groups = mysqli_query($connect, "SELECT * from candidate");
        $groupsdata = mysqli_fetch_all($groups, MYSQLI_ASSOC);
        $_SESSION['groupsdata'] = $groupsdata;
        $_SESSION['userdata']['status'] = 1;
            
        echo '<script>
                    alert("Voting successfull!");
                    window.location = "../api/logout.php";
                </script>';
                

    }
    else{
        echo '<script>
                    alert("Voting failed!.. Try again.");
                    window.location = "../routes/dashboard.php";
                </script>';
    }
    
?>