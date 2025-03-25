<?php
include('../api/connection.php');
session_start();
if(!isset($_SESSION['votersdata'])){
    header("location: ../routes/admin.php");
}
$votersdata=$_SESSION['votersdata'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OVS Dashboard- Voters</title>
    <link rel="stylesheet" href="dashboard.css">
</head>

<body>
    <section id="menu">
        <div class="logo">
            <h2 class="white"><a href="../admin/dashboard.php" style="text-decoration:none"class="white">OVS Dashboard</a></h2>
        </div>
        <div class="items">
            <li><a href="../admin/voterspanel.php">Voters</a></li>
            <li><a href="../admin/candidatespanel.php">Candidates</a></li>
            <li><a href="../admin/resultpanel.php">Results</a></li>
            <li><a href="../api/logout.php">LogOut</a></li>
        </div>
    </section>
    <section id="interface">
        <h3 class="i-name">Manage Voters</h3>
        <div class="board">
            <table width="100%">
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Status</td>
                        <td>Options</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                     <?php
                    $sql="SELECT * from voter";
                    $result=mysqli_query($connect,$sql);
                   
                    if($result){
                        while($row=mysqli_fetch_assoc($result)){
                    $id=$row['id'];
                    $fname=$row['fname'];
                    $lname=$row['lname'];
                    $uname=$row['uname'];
                    $roles=$row['roles'];
                    if ($row['status'] ==0){
                        $status="Not Voted";
                    }
                    else {
                        $status="Voted";
                    }

                   echo'<tr>
                        <td class="people">
                            <div class="people-de">
                                <h5>'.$fname.'</h5>
                                <h5>'.$lname.'</h5>
                                <p>'.$uname.'</p>
                            </div>
                        </td>
                        <td class="active">
                            <p>'.$status.'</p>
                        </td>
                        
                      
                        <td class="role">
                            <a href="updatevoter.php?updateid='.$id.'">Edit</a> | <a href="deletevoter.php?deleteid='.$id.'">Delete</a>
                        </td>
                    </tr>';
                }}
                ?>
                </tbody>
            </table>
        </div>
    </section>
</body>

</html>