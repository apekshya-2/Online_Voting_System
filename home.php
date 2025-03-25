<!DOCTYPE html>
<html>

<head>
    <title>Login page</title>
    <link rel="stylesheet" href="css/stylesheet.css">
</head>

<body>
    <a id="admin" href="routes/admin.php">Admin Login </a>
    <div id="leftsection">
        OVS <br>
        Online Voting System
    </div>
    <div id="rightsection">
        <form action="api/login.php" method="POST">
            <input type="text" name="userid" id="userid" placeholder="Username"> <br><br>
            <input type="password" name="password" placeholder="Password" id="passwd">
            <br><br>
            <button id="loginbtn" type="submit" name="Login">Login</button>
            <br> <br>
            New user?<a href="routes/register.php">Register here.</a>
        </form>
    </div>

</body>

</html>