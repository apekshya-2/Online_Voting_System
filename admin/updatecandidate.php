<?php

include("../api/connection.php");

$id = &$_GET['updateid'];

$sql = "SELECT * FROM candidate WHERE  id='$id'";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($result);

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $username = $_POST['username'];

    $query = "UPDATE candidate set name='$name', username='$username' WHERE id='$id'";
    $query_run = mysqli_query($connect, $query);

    $query1 = "UPDATE result set name='$name', username='$username' WHERE id='$id'";
    $query_run1 = mysqli_query($connect, $query1);

    if ($query_run) {

        echo "<script>alert('Update Success!')</script>";
        header('Location:../admin/candidatespanel.php');
    } elseif ($query_run1) {

        echo "<script>alert('Update Success!')</script>";
        header('Location:../admin/candidatespanel.php');
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
    <title>Update-Candidates</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <center>
        <form id="updateform" method="POST" enctype="multipart/form-data">
            <h1>Update Candidates Info</h1>

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