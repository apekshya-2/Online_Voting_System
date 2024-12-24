<?php

include("connection.php");
$error=0;
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$age = $_POST['age'];
$username = $_POST['username'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$state = $_POST['state'];
$district = $_POST['district'];
$city = $_POST['city'];
$gender = $_POST['gender'];
$mstatus = $_POST['mstatus'];
$roles = $_POST['roles'];
// $partyname=isset($_POST['partyname']):null;
$photo=$_FILES['photo']['name'];
if (isset($_POST['roles']) && $_POST['roles'] == 'candidate') {
    $partyname = $_POST['partyname'];
}


 // Validate that passwords match
if ($password !== $cpassword) {
    $_SESSION['msg'] = "Passwords do not match!";
    header("Location: ../register.php");
    exit();
}

// Hash the password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

 // Handle file upload (photo)
 $targetDir = "../uploads/";
 $targetFile = $targetDir . basename($photo);
 $uploadOk = 1;
 $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

 // Check if image file is a valid image
 if (isset($_POST["submit"])) {
     $check = getimagesize($_FILES["photo"]["tmp_name"]);
     if ($check === false) {
         $uploadOk = 0;
         $_SESSION['msg'] = "File is not an image.";
         header("Location: ../register.php");
         exit();
     }
 }

 // Check if file already exists
 if (file_exists($targetFile)) {
     $uploadOk = 0;
     $_SESSION['msg'] = "Sorry, file already exists.";
     header("Location: ../register.php");
     exit();
 }

 // Limit file size
 if ($_FILES["photo"]["size"] > 500000) { // 500KB
     $uploadOk = 0;
     $_SESSION['msg'] = "Sorry, your file is too large.";
     header("Location: ../register.php");
     exit();
 }

 // Allow certain file formats
 if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
     $uploadOk = 0;
     $_SESSION['msg'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
     header("Location: ../register.php");
     exit();
 }

 // Check if upload is allowed
 if ($uploadOk == 0) {
     $_SESSION['msg'] = "Sorry, your file was not uploaded.";
     header("Location: ../register.php");
     exit();
 } else {
     if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile)) {
         // Prepare SQL to insert user data into the database
         $sql = "INSERT INTO users (firstname, lastname, email, age, username, password, state, district, city, gender, mstatus, role, partyname, photo)
                 VALUES ('$firstname', '$lastname', '$email', '$age', '$username', '$hashedPassword', '$state', '$district', '$city', '$gender', '$mstatus', '$role', '$partyname', '$targetFile')";

         if (mysqli_query($conn, $sql)) {
             $_SESSION['msg'] = "Registration successful!";
             header("Location: ../login.php"); // Redirect to login page
             exit();
         } else {
             $_SESSION['msg'] = "Error: " . mysqli_error($conn);
             header("Location: ../register.php");
             exit();
         }
     } else {
         $_SESSION['msg'] = "Sorry, there was an error uploading your file.";
         header("Location: ../register.php");
         exit();
     }
 }

if ($age < 18) {
    $error=1;
    echo '<script>
                alert("You are not eligible to vote!");
                window.location = "../register.php";
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
                window.location = "../register.php";
            </script>';
}
if (mysqli_num_rows($result3) > 0) {
    $error=1;
    echo '<script>
                alert("User already exists!");
                window.location = "../register.php";
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
                window.location = "../register.php";
            </script>';
}

if (mysqli_num_rows($result4) > 0) {
    $error=1;
    echo '<script>
                alert("Email already exits!");
                window.location = "../register.php";
            </script>';
} if($error==0) {
    if (isset($_POST['register']) && $_POST['roles'] == 'voter') {
        $insert = mysqli_query($connect, "INSERT into voter (firstname, lastname, email, age, username, password, state, district, city, gender, mstatus,status, roles) values('$firstname', '$lastname', '$email', '$age', '$username', '$password', '$state', '$district', '$city', '$gender', '$mstatus', 0,'$roles') ");
        if ($insert) {
            echo '<script>
                    alert("Voter registered successfully!");
                    window.location = "../";
                </script>';
        }
    }

    if (isset($_POST['register']) && $_POST['roles'] == 'candidate') {

        $insert1 = mysqli_query($connect, "INSERT into candidate (firstname, lastname, email, age, username, password, state, district, city, gender, mstatus,status , votes, roles, partyname) values('$firstname', '$lastname', '$email', '$age', '$username', '$password', '$state', '$district', '$city', '$gender', '$mstatus', 0, 0,'$roles', '$partyname') ");
        $sql2 = "SELECT * FROM candidate WHERE username='$username'";
        $result2 = mysqli_query($connect, $sql2);
        $row = mysqli_fetch_array($result2);
        $id = $row['id'];


        $insert2 = mysqli_query($connect, "INSERT into result (id,firstname, lastname, email, age, username, password, state, district, city, gender, mstatus,status , votes, roles, partyname) values('$id', '$firstname', '$lastname', '$email', '$age', '$username', '$password', '$state', '$district', '$city', '$gender', '$mstatus', 0, 0,'$roles', '$partyname') ");


        if ($insert1) {
            echo '<script>
                    alert("Candidate registered successfully!");
                    window.location = "../";
                </script>';
        }
    }
}
?>