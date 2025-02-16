<?php
include('../api/connection.php');
session_start();
if (!isset($_SESSION['votersdata'])) {
    header("location: ../routes/admin.php");
}
if (!isset($_SESSION['groupsdata'])) {
    header("location: ../routes/admin.php");
}
$votersdata = $_SESSION['votersdata'];
$groupsdata = $_SESSION['groupsdata'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OVS Dashboard</title>

    <link rel="stylesheet" href="dashboard.css">
</head>

<body>
    <section id="menu">

        <div class="logo">
            <h2 class="white">OVS Dashboard</h2>
        </div>
        <div class="items">

            <li><a href="../admin/voterspanel.php">Voters</a></li>
            <li><a href="../admin/candidatespanel.php">Candidates</a></li>
            <li><a href="../admin/resultpanel.php">Results</a></li>
            <li><a href="../api/logout.php">LogOut</a></li>
        </div>

    </section>
    <section id="interface">

        <h3 class="i-name">Dashboard</h3>

        <div class="board">
            <table width="100%">
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Role</td>
                        <td>Status</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * from voter";
                    $result = mysqli_query($connect, $sql);
                    $sql2 = "SELECT * from candidate";
                    $result2 = mysqli_query($connect, $sql2);
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $name = $row['name'];
                            
                            $username = $row['username'];
                            $roles = $row['roles'];
                            if ($row['status'] == 0) {
                                $status = "Not Voted";
                            } else {
                                $status = "Voted";
                            }

                            echo '<tr>
                        <td class="people">
                            <div class="people-de">
                                <h5>' . $name . '</h5>
                                
                                <p>' . $username . '</p>
                            </div>
                        </td>
                        <td class="people-des">
                            <h5>' . $roles . '</h5>

                        </td>
                        <td class="active">
                            <p>' . $status . '</p>
                        </td>
                    </tr>';
                        }
                    }


                    if ($result2) {
                        while ($row = mysqli_fetch_assoc($result2)) {
                            $name = $row['name'];
                            
                            $username = $row['username'];
                            $roles = $row['roles'];
                            if ($row['status'] == 0) {
                                $status = "Not Voted";
                            } else {
                                $status = "Voted";
                            }

                            echo '<tr>
                        <td class="people">
                            <div class="people-de">
                                <h5>' . $name . '</h5>
                                
                                <p>' . $username . '</p>
                            </div>
                        </td>
                        <td class="people-des">
                            <h5>' . $roles . '</h5>

                        </td>
                        <td class="active">
                            <p>' . $status . '</p>
                        </td>
                    </tr>';
                        }
                    }

                    ?>
                </tbody>
            </table>
        </div>
    </section>
</body>

</html>