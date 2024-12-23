<?php
    session_start();
   include("../api/connection.php");
  
   if(!isset($_SESSION['groupsdata'])){
        header("location: ../routes/admin.php");
    }

    $groupsdata=$_SESSION['groupsdata'];
        
?>


<html>
    <head>
        <title>Online voting system - Admin Dashboard</title>
        <link rel="stylesheet" href="../css/stylesheet.css">
    </head>
    <body>
        
            <center>
            <div id="headerSection">
            <a href="../"><button id="back-button"> Back</button></a>
            <a href="../api/logout.php"><button id="logout-button">Logout</button></a>
            <h1>Online Voting System</h1>  
            </div>
            </center>
            <hr>

            <div id="mainSection">
                <div id="profileSection">
                    <center></center><br>
                    <b>Name : admin <br>
                    
                </div>
                <div id="groupSection">
                    <?php

                        if($_SESSION['groupsdata'])
                        { 
                                $groupsdata = $_SESSION['groupsdata'];    
                        for($i=0; $i<count($groupsdata); $i++){
                            ?>
                                <div>
                                <b>Candidate Name : </b><?php echo $groupsdata[$i]['fname'] ?><br>
                                <b>Party Name : </b><?php echo $groupsdata[$i]['partyname'] ?> <br><br>
                                <b>Votes: </b><?php echo $groupsdata[$i]['votes']?> <br>

                                <form action="../api/vote.php" method="POST">
                               
                                 <input type="hidden" name="gvotes" value="<?php echo $groupsdata[$i]['votes'] ?>">
                                <input type="hidden" name = "gid" value="<?php echo $groupsdata[$i]['id'] ?>">
                               
                               <?php 
                               
                                ?>
                               
                                </form>
                                </div>
                            <?php
                        }
                    }
                    else{
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