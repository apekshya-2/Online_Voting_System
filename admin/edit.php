<?php 
session_start();
// print_r($_POST);
include "./header.php";
echo isset($_SESSION['msg'])? $_SESSION['msg']:'';
?>

    <div class="form-box">
        <h1>Online Voting System</h1>
    <form action="./insert.php" method="POST" name="user_form" entype="multipart/from-data" >
    <div class="field-group">
        <label for="name">name</label>
        <input type="text" id="name" name="name" value="">
</div>
<div class="field-group">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" value="">
</div>
<div class="field-group">
        <label for="age">Age</label>
        <input type="text" id="age" name="age" value="">
</div>
<div class="field-group">
        <label for="uname">Username/Email</label>
        <input type="text" id="uname" name="username" value="">
</div>
<div class="field-group">
        <label for="pwd">Password</label>
        <input type="password" id="pwd" name="password" value="">
</div>
<div class="field-group">
        <label for="cpwd">Confirm Password</label>
        <input type="cpassword" id="cpwd" name="cpassword" value="">
</div>
<div class="field-group">
        <label for="state">State</label>
        <input type="state" id="state" name="state" value="">
</div>
<div class="field-group">
        <label for="district">District</label>
        <input type="district" id="district" name="district" value="">
</div>
<div class="field-group">
        <label for="city">City</label>
        <input type="city" id="city" name="city" value="">
</div>
<div>
            Gender:
            <input type="radio" name="gender" class="gender" value="male"> Male
            <input type="radio" name="gender" class="gender" value="female"> Female
            <input type="radio" name="gender" class="gender" value="others"> Others
            <br><br>
            </div>
            Marital Status:
            <input type="radio" name="mstatus" value="married"> Married
            <input type="radio" name="mstatus" value="unmarried"> Unmarried
            <br><br>
            <label for="roles">Role:</label>
             <select id="roles" name="roles" required>
                 <option value="" selected>--Select Role--</option>
                <option value="voter">Voter</option>
                <option value="candidate" name="candidate">Candidate</option>
            </select>
<div class="field-group">
        <label for="photo">Confirm Photo</label>
        <input type="file" id="photo" name="photo" value="">

<button type="submit" name="submit" class="btn">Register </button>

</form>
</div>
<!-- <script>
         var roles = document.getElementById("roles");
        var candidate = document.getElementById("candidate");

        roles.addEventListener("change", function (event) {
        
            candidate.style.display = "none";
            switch (roles.value) {
                case "candidate":
                candidate.style.display = "block";
                break;
            }});

                    
</script> -->
<?php include "./footer.php";
session_destroy();?>