<?php
session_start();
include("../api/connection.php");

if (!$connect) {
    die("Connection error. Please check your database connection.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $adminName = $_POST['admin_name'];
    $adminPass = $_POST['admin_pass'];

    $sql = "SELECT * FROM admin WHERE admin_name='$adminName' AND admin_pass='$adminPass'";
    $results = mysqli_query($connect, $sql);

    if (mysqli_num_rows($results) > 0) {
        $_SESSION['admindata'] = mysqli_fetch_all(mysqli_query($connect, "SELECT * FROM admin"), MYSQLI_ASSOC);
        $_SESSION['votersdata'] = mysqli_fetch_all(mysqli_query($connect, "SELECT * FROM voter"), MYSQLI_ASSOC);
        $_SESSION['groupsdata'] = mysqli_fetch_all(mysqli_query($connect, "SELECT * FROM candidate"), MYSQLI_ASSOC);

        echo '<script>window.location = "../admin/dashboard.php";</script>';
    } else {
        echo '<script>
                alert("Invalid credentials!");
                window.location = "../routes/admin.php";
            </script>';
    }
}
?>
