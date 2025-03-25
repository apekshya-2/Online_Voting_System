
<!DOCTYPE html>
<html lang="en">

<head>
    <title> Admin Login page</title>
    <link rel="stylesheet" href="../css/stylesheet.css">
</head>

<body>

    <center>
        <div id="adminlogin"> Administrator Login</div>
        <div id="adminpage" >
            <form method="POST" action="../api/admin.php"<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
            <input type="text" name="admin_name" id="userid" placeholder="Username"> <br><br>
            <input type="password" name="admin_pass" placeholder="Password" id="passwd">
            <br><br>
            <button type="submit" name="Login" id="loginbtn">Login</button>
            </form>
        </div>
    </center>

<?php


?>
</body>

</html>