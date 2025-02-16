<?php

include("../api/connection.php");

$id = &$_GET['updateid'];

$sql = "SELECT * FROM voter WHERE  id='$id'";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($result);

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    
    $username = $_POST['username'];

    $query = "UPDATE voter set name='$name', username='$username' WHERE id='$id'";
    $query_run = mysqli_query($connect, $query);

    if ($query_run) {

        echo "<script>alert('Update Success!')</script>";
        header('location:../admin/voterspanel.php');
    } else {
        die(mysqli_error($connect));
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update-Voters</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <center>
        <form id="updateform" method="POST" enctype="multipart/form-data">
            <h1>Update Voters Info</h1>

            <div class="form-design">
                Name: <input type="text" name="name" value="<?php echo $row['name']; ?>">
            </div><br>


            <div class="form-design">
                User Name: <input type="text" name="username" value="<?php echo $row['username']; ?>">
            </div><br>
            <button type="submit" name="submit">Update </button><br>
        </form>

    </center>
</body>

</html>