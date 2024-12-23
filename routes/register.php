<?php 
session_start();
include "../header.php";

if (isset($_SESSION['msg'])) {
    echo "<p>" . htmlspecialchars($_SESSION['msg']) . "</p>";
    unset($_SESSION['msg']);
}
?>

<div class="form-box">
    <h1>Registration</h1>
    <form action="./insert.php" method="POST" enctype="multipart/form-data">
        <div class="field-group">
            <label for="firstname">Firstname</label>
            <input type="text" id="firstname" name="firstname" required>
        </div>
        <div class="field-group">
            <label for="lastname">Lastname</label>
            <input type="text" id="lastname" name="lastname" required>
        </div>
        <div class="field-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="field-group">
            <label for="age">Age</label>
            <input type="number" id="age" name="age" min="18" required>
        </div>
        <div class="field-group">
            <label for="username">Username/Email</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="field-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="field-group">
            <label for="cpassword">Confirm Password</label>
            <input type="password" id="cpassword" name="cpassword" required>
        </div>
        <div class="field-group">
            <label for="state">State</label>
            <input type="text" id="state" name="state">
        </div>
        <div class="field-group">
            <label for="district">District</label>
            <input type="text" id="district" name="district">
        </div>
        <div class="field-group">
            <label for="city">City</label>
            <input type="text" id="city" name="city">
        </div>
        <div>
            <fieldset>
                <legend>Gender</legend>
                <input type="radio" name="gender" value="male" required> Male
                <input type="radio" name="gender" value="female" required> Female
                <input type="radio" name="gender" value="others" required> Others
            </fieldset>
        </div>
        <div>
            <fieldset>
                <legend>Marital Status</legend>
                <input type="radio" name="mstatus" value="married" required> Married
                <input type="radio" name="mstatus" value="unmarried" required> Unmarried
            </fieldset>
        </div>
        <div class="field-group">
            <label for="roles">Role</label>
            <select id="roles" name="roles" required>
                <option value="" selected>--Select Role--</option>
                <option value="voter">Voter</option>
                <option value="candidate">Candidate</option>
            </select>
        </div>
        <div id="candidate" style="display:none;">
            <label>Party Name</label>
            <input type="radio" value="CPN (UML)" name="partyname"> CPN (UML)
            <input type="radio" value="Nepali Congress (NC)" name="partyname"> Nepali Congress (NC)
            <input type="radio" value="CPN(Maoist-centre)" name="partyname"> CPN(Maoist-centre)
        </div>
        <div class="field-group">
            <label for="photo">Photo</label>
            <input type="file" id="photo" name="photo">
        </div>
        <button type="submit" name="submit" class="btn">Register</button>
    </form>
</div>

<script>
    var roles = document.getElementById("roles");
    var candidate = document.getElementById("candidate");

    roles.addEventListener("change", function () {
        candidate.style.display = roles.value === "candidate" ? "block" : "none";
    });
</script>

<?php 
include "../footer.php";
?>
