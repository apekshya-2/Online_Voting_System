<?php include "./header.php"; ?>
<div class="form-box">
    <h1>Login User</h1>

    <form action="./api/login_controller.php" method="POST" name="user_form">
        <div class="field-group">
            <label for="uname">Username/Email</label>
            <input type="text" id="uname" name="username" value="">
            <span class="error-message"></span>
        </div>
        <div class="field-group">
            <label for="pwd">Password</label>
            <input type="password" id="pwd" name="password" value="">
            <span class="error-message"></span>
        </div>
        <button type="submit" name="submit" class="btn">Login</button>
        <br><br>
        New user? <a href="routes/register.php">Register here.</a>
    </form>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const uname = document.getElementById("uname");
        const pwd = document.getElementById("pwd");
        const btn = document.querySelector(".btn");

        btn.addEventListener("click", function (e) {
            let isValid = true;

            if (uname.value.trim() === '') {
                e.preventDefault();
                uname.nextElementSibling.textContent = "Username is empty.";
                isValid = false;
            } else {
                uname.nextElementSibling.textContent = "";
            }

            if (pwd.value.trim() === '') {
                e.preventDefault();
                pwd.nextElementSibling.textContent = "Password is empty.";
                isValid = false;
            } else {
                pwd.nextElementSibling.textContent = "";
            }

            return isValid;
        });
    });
</script>

<?php include "./footer.php"; ?>
