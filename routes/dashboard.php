<?php
session_start();

if (!isset($_SESSION['userdata'])) {
    header("location: ../");
}
$userdata = $_SESSION['userdata'];
$groupsdata = $_SESSION['groupsdata'];

if ($_SESSION['status'] == 1) {
    $status = '<b style="color: green">Voted</b>';
} else {
    $status = '<b style="color: red">Not Voted</b>';
}

?>


<html>

<head>
    <title>Online voting system - Dashboard</title>
    <link rel="stylesheet" href="routesdash.css">
</head>

<body>

    <center>
        <div id="headerSection">
            <a href="../"><button id="back-button"> Back</button></a>
            <a href="../api/logout.php"><button id="logout-button">Logout</button></a>
            
            <h1 id="onlinevs">Online Voting System - Dashboard</h1>
        </div>
    </center>
    <hr>
    <div id="mainSection">
        <div id="profileSection" class="box">
            <center>
                <h2 align="center">Voter Details</h2>

                <?php
                if ($userdata['gender'] == "male") { ?>
                    <center><img src="../uploads/male.png" height="100" width="100"></center><br>
                <?php } else {
                ?>
                    <center><img src="../uploads/female.png" height="100" width="100"></center><br>
                <?php
                } ?>

                <b>Name : </b><?php echo $userdata['fname'] ?> <?php echo $userdata['lname'] ?><br>
                <b>Age : </b><?php echo $userdata['age'] ?> <br><b>Gender : </b><?php echo $userdata['gender'] ?> <br>
                <b>Address : </b><?php echo $userdata['district'] ?><br>
                <b>Status : </b><?php echo $status ?>
            </center>
        </div>

        <div id="groupSection" class="box">
            <h2 align="center">Candidate Details</h2>
            <?php


            if ($_SESSION['groupsdata']) {
                $groupsdata = $_SESSION['groupsdata'];
                for ($i = 0; $i < count($groupsdata); $i++) {

            ?>
                    <div>
                        <center>
                            <b>Candidate Name : </b><?php echo $groupsdata[$i]['fname'] ?> <?php echo $groupsdata[$i]['lname'] ?><br>
                            <b>Team Name : </b> <?php echo $groupsdata[$i]['teamname'] ?><br>


                            <form action="../api/vote.php" method="POST">
                                <input type="hidden" name="gvotes" value="<?php echo $groupsdata[$i]['votes'] ?>">
                                <input type="hidden" name="gid" value="<?php echo $groupsdata[$i]['id'] ?>">

                                <?php

                                if ($_SESSION['status'] == 1) {
                                ?>
                                    <button disabled style="padding: 5px; font-size: 15px; background-color: #27ae60; color: white; border-radius: 5px;" type="button">Voted</button>
                                <?php
                                } else {
                                ?>
                                    <button style="padding: 5px; font-size: 15px; background-color: #3498db; color: white; border-radius: 5px;" type="submit">Vote</button>
                                <?php
                                }
                                ?>

                            </form>
                        </center>

                    </div>
                <?php
                }
            } else {
                ?>
                <div style="border-bottom: 1px solid #bdc3c7; margin-bottom: 10px">
                    <b>No candidates available right now.</b>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</body>

</html>