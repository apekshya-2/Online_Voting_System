<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    </script>

    <title>Online voting system - Registratrion</title>
    <link rel="stylesheet" href="../css/stylesheet.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body>
    <center>


        <form name="myForm" id="form1" action="../api/register.php" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
              <div class="header">
            <h2>Sign Up</h2>
</div>
         <div class="form-control" id="name1">
    
            <input type="text" name="name" id="name" placeholder="Name" required><i id="icon" class="fa-solid fa-circle-check"></i>
            <i id="icon" class="fa-solid fa-circle-exclamation"></i>
            <!-- <span id="span" class="formerror" >Error!</span>
             -->
            <br>
         </div>
         
 <div class="form-control" id="email1">
          
            <input type="text" name="email" id="email" placeholder="EmailID" required>
            <i class="fa-solid fa-circle-check"></i>
            <i class="fa-solid fa-circle-exclamation"></i>
            <!-- <span id="espan" class="formerror">Error!</span> -->
         </div>
            <div class="form-control" id="age1">
           <input type="text" name="age" id="age" placeholder="Age" required> <i class="fa-solid fa-circle-check"></i>
            <i class="fa-solid fa-circle-exclamation"></i>
             <!-- <span id="aspan" class="formerror">Not Valid!</span>  -->
            <br>
</div>
           <div class="form-control" id="username1">
           <input type="text" name="username" id="username" placeholder="Username" required> 
             <i class="fa-solid fa-circle-check"></i>
            <i class="fa-solid fa-circle-exclamation"></i>
            <!-- <span id="usernamespan" class="formerror">UError!</span> -->
           
            <br>
</div>
            <div class="form-control" id="pass1">
            <input type="password" name="password" id="password" placeholder="Password" required>  <i class="fa-solid fa-circle-check"></i>
            <i class="fa-solid fa-circle-exclamation"></i>
            <!-- <span id="passwordspan"class="formerror">Error!</span>
             -->
            
</div>
             <div class="form-control" id="cpass1">
            <input type="password" name="cpass" id="cpass" placeholder="Confirm Password" required><i class="fa-solid fa-circle-check"></i>
            <i class="fa-solid fa-circle-exclamation"></i>
            <!-- <span id="cspan" class="formerror">Error!</span> -->
       
          
</div>

            <div class="form-control" id="state1">
           <input type="text" name="state" id="state" placeholder="Province Name" required>  <i class="fa-solid fa-circle-check"></i>
            <i class="fa-solid fa-circle-exclamation"></i>
            <!-- <span id="sspan"class="formerror">Error!</span> -->
            <br>
</div>
            <div class="form-control" id="district1">
           <input type="text" name="district" id="district" placeholder="District" required> <i class="fa-solid fa-circle-check"></i>
            <i class="fa-solid fa-circle-exclamation"></i>
            <!-- <span id="dspan"class="formerror">Error!</span> -->
             <br>
</div>
            <div class="form-control" id="city1">
            <input type="text" name="city" id="city" placeholder="City" required><i class="fa-solid fa-circle-check"></i>
            <i class="fa-solid fa-circle-exclamation"></i>
            <!-- <span id="ctspan"class="formerror">Error!</span> -->
            
            <br>
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

            <div id="candidate" style="display:none;">
        <input type="radio" value="CPN (UML)" name="partyname" />CPN (UML)
        <input type="radio" value="Nepali Congress (NC)" name="partyname"/>Nepali Congress (NC)
        <input type="radio" value="CPN(Maoist-centre)" name="partyname"/>CPN(Maoist-centre)
        
    </div>
    
    <script>
     var roles = document.getElementById("roles");
        var candidate = document.getElementById("candidate");

        roles.addEventListener("change", function (event) {
        
            candidate.style.display = "none";
            switch (roles.value) {
                case "candidate":
                candidate.style.display = "block";
                break;
            }});

                    
</script>

            <br> 
            <button id="register" type="submit" name="register">Register</button><br><br>
   
        </form>
    
        </center>
          <script src="../js/validate.js"></script>
</body>

</html>