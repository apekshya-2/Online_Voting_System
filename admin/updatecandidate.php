<?php

include("../api/connection.php");

$id = &$_GET['updateid'];

$sql = "SELECT * FROM candidate WHERE  id='$id'";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($result);

if (isset($_POST['submit'])) {

    $ffname = $_POST['fname'];
    $llname = $_POST['lname'];
    $uuname = $_POST['uname'];

    $query = "UPDATE candidate set fname='$ffname', lname='$llname', uname='$uuname' WHERE id='$id'";
    $query_run = mysqli_query($connect, $query);

    $query1 = "UPDATE result set fname='$ffname', lname='$llname', uname='$uuname' WHERE id='$id'";
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
    <link rel="stylesheet" href="../css/stylesheet.css">
</head>

<body>

    <center>
        <form id="updateform" method="POST" enctype="multipart/form-data">
            <h1>Update Candidates Info</h1>

            <div class="form-design">
                First Name: <input type="text" name="fname" value="<?php echo $row['fname']; ?>">
            </div><br>

            <div class="form-design">
                Last Name: <input type="text" name="lname" value="<?php echo $row['lname']; ?>">
            </div><br>

            <div class="form-design">
                User Name: <input type="text" name="uname" value="<?php echo $row['uname']; ?>">
            </div><br>
            <button type="submit" name="submit">Update </button><br>
        </form>

    </center>
</body>

</html>