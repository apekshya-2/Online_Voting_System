const firstName = document.getElementById("fname");
const lastName = document.getElementById("lname");
const emailid = document.getElementById("email");
const ageno = document.getElementById("age");
const userName = document.getElementById("uname");
const form = document.getElementById("form1");
const password = document.getElementById("pass");
const rePassword = document.getElementById("cpass");
const statename = document.getElementById("state");
const districtname = document.getElementById("district");
const cityname = document.getElementById("city");
let validfirstName = false;
let validlastName = false;
let validEmail = false;
let validage = false;
let validUserName = false;
let validPassword = false;
let confirmPassword = false;
let validstateName = false;
let validdistrictName = false;
let validcityName = false;
firstName.addEventListener("blur", () => {
  let regx = /^[a-zA-Z]([a-zA-Z/._/-]){1,10}$/;
  if (firstName.value === "" || firstName.value == null) {
    let obj = document.getElementById("firstName");
    obj.innerText = "First name is required.";
    obj.classList.add("show");
    firstName.classList.add("error");
    firstName.focus();
    validfirstName = false;
  } else if (!regx.test(firstName.value)) {
    let obj = document.getElementById("firstName");
    obj.innerText = "Invalid first name.";
    validfirstName = false;
    obj.classList.add("show");
    firstName.classList.add("error");
    firstName.focus();
  } else {
    document.getElementById("firstName").innerText = "";
    validfirstName = true;
    firstName.classList.remove("error");
  }
});

lastName.addEventListener("blur", () => {
  let regx = /^[a-zA-Z]([a-zA-Z/._/-]){2,10}$/;
  if (lastName.value === "" || lastName.value == null) {
    let obj = document.getElementById("lastName");
    obj.innerText = "Last name is required.";
    obj.classList.add("show");
    lastName.classList.add("error");
    lastName.focus();
    validlastName = false;
  } else if (!regx.test(lastName.value)) {
    let obj = document.getElementById("lastName");
    obj.innerText = "Invalid last name.";
    validlastName = false;
    obj.classList.add("show");
    lastName.classList.add("error");
    lastName.focus();
  } else {
    document.getElementById("lastName").innerText = "";
    validlastName = true;
    lastName.classList.remove("error");
  }
});
emailid.addEventListener("blur", () => {
  let regx =
    /^[a-zA-Z_]([a-zA-Z0-9\.\-_]+)@([a-zA-Z0-9_\-]+)\.([a-zA-Z]){2,4}$/;
  if (emailid.value === "" || emailid.value == null) {
    let obj = document.getElementById("emailid");
    obj.innerText = "Email is required.";
    validEmail = false;
    obj.classList.add("show");
    emailid.classList.add("error");
    emailid.focus();
  } else if (!regx.test(emailid.value)) {
    let obj = document.getElementById("emailid");
    obj.innerText = "Invalid email address.";
    validEmail = false;
    obj.classList.add("show");
    emailid.classList.add("error");
    emailid.focus();
  } else {
    document.getElementById("emailid").innerText = "";
    validEmail = true;
    emailid.classList.remove("error");
  }
});
ageno.addEventListener("blur", () => {
  let regx = /^[1-9]([0-9]){0,2}$/;
  if (ageno.value === "" || ageno.value == null) {
    let obj = document.getElementById("ageno");
    obj.innerText = "Age is required.";
    validage = false;
    ageno.classList.add("error");
    obj.classList.add("show");
    ageno.focus();
  } else if (ageno.value < 18 ||geno.value >110) {
    let obj = document.getElementById("ageno");
    obj.innerText = "You are not eligible to vote.";
    validage = false;
    ageno.classList.add("error");
    obj.classList.add("show");
    ageno.focus();
  } else if (!regx.test(ageno.value)) {
    let obj = document.getElementById("ageno");
    obj.innerText = "Enter the correct age.";
    obj.classList.add("show");
    validage = false;
    ageno.classList.add("error");
    ageno.focus();
  } else {
    document.getElementById("ageno").innerText = "";
    validage = true;
    ageno.classList.remove("error");
  }
});
userName.addEventListener("blur", () => {
  let regx = /^[a-zA-Z]([a-zA-Z0-9/._/-]){2,10}$/;
  console.log("UserName is blurred");
  if (userName.value === "" || userName.value == null) {
    let obj = document.getElementById("userName");
    obj.innerText = "User name is required.";
    obj.classList.add("show");
    userName.classList.add("error");
    userName.focus();
    validUserName = false;
  } else if (!regx.test(userName.value)) {
    let obj = document.getElementById("userName");
    obj.innerText = "Invalid User name.";
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
password.addEventListener("blur", () => {
  if (password.value === "" || password.value == null) {
    let obj = document.getElementById("password");
    obj.innerText = "Password is required.";
    validPassword = false;
    obj.classList.add("show");
    password.classList.add("error");
    password.focus();
    //password.focus();
  } else if (password.value.length < 6) {
    let obj = document.getElementById("password");
    obj.innerText = "Password must be of at least 6 characters.";
    validPassword = false;
    obj.classList.add("show");
    password.classList.add("error");
    password.focus();
  } else {
    document.getElementById("password").innerText = "";
    validPassword = true;
    password.classList.remove("error");
  }
});
rePassword.addEventListener("blur", () => {
  if (rePassword.value === "" || rePassword.value == null) {
    let obj = document.getElementById("rePassword");
    obj.innerText = "Confirm Password is required.";
    confirmPassword = false;
    obj.classList.add("show");
    rePassword.classList.add("error");
    rePassword.focus();
  } else if (password.value !== rePassword.value) {
    document.getElementById("rePassword").innerText =
      "Password and confirm password must match.";
    confirmPassword = false;
    rePassword.classList.add("error");
    rePassword.focus();
  } else {
    document.getElementById("rePassword").innerText = "";
    confirmPassword = true;
    rePassword.classList.remove("error");
  }
});
statename.addEventListener("blur", () => {
  let regx = /^[a-zA-Z]([a-zA-Z/-]){3,15}$/;
  if (statename.value === "" || statename.value == null) {
    let obj = document.getElementById("statename");
    obj.innerText = "State name is required.";
    obj.classList.add("show");
    statename.classList.add("error");
    statename.focus();
    validstatename = false;
  } else if (!regx.test(statename.value)) {
    let obj = document.getElementById("statename");
    obj.innerText = "Invalid state name.";
    validstatename = false;
    obj.classList.add("show");
    statename.classList.add("error");
    statename.focus();
  } else {
    document.getElementById("statename").innerText = "";
    validstatename = true;
    statename.classList.remove("error");
  }
});
districtname.addEventListener("blur", () => {
  let regx = /^[a-zA-Z]([a-zA-Z/-]){3,15}$/;
  if (districtname.value === "" || districtname.value == null) {
    let obj = document.getElementById("districtname");
    obj.innerText = "District name is required.";
    obj.classList.add("show");
    districtname.classList.add("error");
    districtname.focus();
    validdistrictname = false;
  } else if (!regx.test(districtname.value)) {
    let obj = document.getElementById("districtname");
    obj.innerText = "Invalid district name.";
    validdistrictname = false;
    obj.classList.add("show");
    districtname.classList.add("error");
    districtname.focus();
  } else {
    document.getElementById("districtname").innerText = "";
    validdistrictname = true;
    districtname.classList.remove("error");
  }
});
cityname.addEventListener("blur", () => {
  let regx = /^[a-zA-Z]([a-zA-Z/-]){3,15}$/;
  if (cityname.value === "" || cityname.value == null) {
    let obj = document.getElementById("cityname");
    obj.innerText = "City name is required.";
    obj.classList.add("show");
    cityname.classList.add("error");
    cityname.focus();
    validcityname = false;
  } else if (!regx.test(cityname.value)) {
    let obj = document.getElementById("cityname");
    obj.innerText = "Invalid city name.";
    validcityname = false;
    obj.classList.add("show");
    cityname.classList.add("error");
    cityname.focus();
  } else {
    document.getElementById("cityname").innerText = "";
    validcityname = true;
    cityname.classList.remove("error");
  }
});
