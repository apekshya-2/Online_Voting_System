<?php
include('../api/connection.php');
session_start();

if (!isset($_SESSION['groupsdata'])){
    header("location: ../routes/admin.php");
}

$groupsdata=$_SESSION['groupsdata'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OVS Dashboard - Candidate</title>
    <link rel="stylesheet" href="dashboard.css">
</head>

<body>
    <section id="menu">
        <div class="logo">
            <h2 class="white"><a href="../admin/dashboard.php" style="text-decoration:none" class="white">OVS Dashboard</a></h2>
        </div>
        <div class="items">
            <li><a href="../admin/voterspanel.php">Voters</a></li>
            <li><a href="../admin/candidatespanel.php">Candidates</a></li>
            <li><a href="../admin/resultpanel.php">Results</a></li>
            <li><a href="../api/logout.php">LogOut</a></li>
        </div>
    </section>
    
    <section id="interface">
        <h3 class="i-name">Voting Result</h3>
        <div class="board">
            <table width="100%">
                <thead>
                    <tr>
                        <td>Candidate's Name</td>
                        <td>Team</td>
                        <td>Position</td>
                        <td>Total Votes</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT fname, lname, uname, roles, teamname, COALESCE(votes, 0) AS votes FROM candidate";
                    $result = mysqli_query($connect, $sql);
                   
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $fname = $row['fname'];
                            $lname = $row['lname'];
                            $uname = $row['uname'];
                            $roles = $row['roles'];
                            $teamname = $row['teamname'];
                            $votes = $row['votes']; // Now it will be 0 if no votes exist

                            echo '<tr>
                                <td class="people">
                                    <div class="people-de">
                                        <h5>'.$fname.' '.$lname.'</h5>
                                        <p>'.$uname.'</p>
                                    </div>
                                </td>
                                <td class="people-des">
                                    <h5>'.$teamname.'</h5>
                                </td>
                                <td class="role">
                                    <h5>'.$roles.'</h5>
                                </td>
                                <td class="active">
                                    <p>'.$votes.'</p>
                                </td>
                            </tr>';
                        }
                    } else {
                        echo "<tr><td colspan='4'>No candidates found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
</body>

</html>
