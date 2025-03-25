const userName = document.getElementById("txtUserName");
const form = document.getElementById("form1");
let validUserName = false;

userName.addEventListener("blur", () => {
  let regx = /^[a-zA-Z]([a-zA-Z]){2,10}$/;
  console.log("UserName is blurred");
  if (userName.value === "" || userName.value == null) {
    let obj = document.getElementById("userName");
    obj.innerText = "User name is required";
    obj.classList.add("show");
    userName.classList.add("error");
    userName.focus();
    validUserName = false;
  } else if (!regx.test(userName.value)) {
    let obj = document.getElementById("userName");
    obj.innerText = "Invalid User name";
    validUserName = false;
    obj.classList.add("show");
    userName.classList.add("error");
    userName.focus();
  } else {
    document.getElementById("userName").innerText = "";
    validUserName = true;
    userName.classList.remove("error");
  }
});

form.addEventListener("submit", (e) => {
  if (
    !(
      validUserName == true &&
      validEmail == true &&
      validPhone == true &&
      validPassword == true &&
      confirmPassword == true
    )
  ) {
    e.preventDefault();
    let length = document.getElementsByClassName("hide").length;
    for (i = 0; i < length; i++) {
      document.getElementsByClassName("hide")[i].classList.add("show");
      document.getElementsByClassName("form-control")[i].classList.add("error");
    }
    userName.focus();
  }
});
