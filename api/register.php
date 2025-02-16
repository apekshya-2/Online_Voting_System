<?php

include("connection.php");
$error=0;
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$uname = $_POST['uname'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];
$state = $_POST['state'];
$district = $_POST['district'];
$city = $_POST['city'];
$gender = $_POST['gender'];
$mstatus = $_POST['mstatus'];
$roles = $_POST['roles'];

if (isset($_POST['roles']) && $_POST['roles'] == 'candidate') {
    $partyname = $_POST['partyname'];
}


if ($pass != $cpass) {
$error=1;
    echo '<script>
                alert("Password and confirm password does not match");
                window.location = "../routes/register.php";
                </script>';
}
if ($age < 18) {
    $error=1;
    echo '<script>
                alert("You are not eligible to vote!");
                window.location = "../routes/register.php";
            </script>';
}

$sql = "SELECT * FROM voter WHERE username='$username'";
$result = mysqli_query($connect, $sql);

$sql3 = "SELECT * FROM candidate WHERE username='$username'";
$result3 = mysqli_query($connect, $sql3);


if (mysqli_num_rows($result) > 0) {
    $error=1;
    echo '<script>
                alert("User already exists!");
                window.location = "../routes/register.php";
            </script>';
}
if (mysqli_num_rows($result3) > 0) {
    $error=1;
    echo '<script>
                alert("User already exists!");
                window.location = "../routes/register.php";
            </script>';
}

$sql1 = "SELECT * FROM voter WHERE email='$email'";
$result1 = mysqli_query($connect, $sql1);


$sql4 = "SELECT * FROM voter WHERE email='$email'";
$result4 = mysqli_query($connect, $sql4);
if (mysqli_num_rows($result1) > 0) {
    $error=1;
    echo '<script>
                alert("Email already exits!");
                window.location = "../routes/register.php";
            </script>';
}

if (mysqli_num_rows($result4) > 0) {
    $error=1;
    echo '<script>
                alert("Email already exits!");
                window.location = "../routes/register.php";
            </script>';
} if($error==0) {
    if (isset($_POST['register']) && $_POST['roles'] == 'voter') {
        $insert = mysqli_query($connect, "INSERT into voter (name, email, age, username, password, state, district, city, gender, mstatus,status, roles) values('$name', '$email', '$age', '$username', '$password', '$state', '$district', '$city', '$gender', '$mstatus', 0,'$roles') ");
        if ($insert) {
            echo '<script>
                    alert("Voter registered successfully!");
                    window.location = "../";
                </script>';
        }
    }

    if (isset($_POST['register']) && $_POST['roles'] == 'candidate') {

        $insert1 = mysqli_query($connect, "INSERT into candidate (name, email, age, username, password, state, district, city, gender, mstatus,status , votes, roles, partyname) values('$name','$email', '$age', '$username', '$password', '$state', '$district', '$city', '$gender', '$mstatus', 0, 0,'$roles', '$partyname') ");
        $sql2 = "SELECT * FROM candidate WHERE uname='$uname'";
        $result2 = mysqli_query($connect, $sql2);
        $row = mysqli_fetch_array($result2);
        $id = $row['id'];


        $insert2 = mysqli_query($connect, "INSERT into result (id,name, email, age, username, password, state, district, city, gender, mstatus,status , votes, roles, partyname) values('$id', '$fname', '$lname', '$email', '$age', '$username', '$password', '$state', '$district', '$city', '$gender', '$mstatus', 0, 0,'$roles', '$partyname') ");


        if ($insert1) {
            echo '<script>
                    alert("Candidate registered successfully!");
                    window.location = "../";
                </script>';
        }
    }
}
?>