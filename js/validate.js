console.log("Voting");

const fname = document.getElementById('fname');
const fname1 = document.getElementById('fname1');
const lname = document.getElementById('lname');
const lname1 = document.getElementById('lname1');
const email = document.getElementById('email');
const email1 = document.getElementById('email1');
const age = document.getElementById('age');
const age1 = document.getElementById('age1');
const uname = document.getElementById('uname');
const uname1 = document.getElementById('uname1');
const pass = document.getElementById('pass');
const pass1 = document.getElementById('pass1');
const cpass = document.getElementById('cpass');
const cpass1 = document.getElementById('cpass1');
const state = document.getElementById('state');
const state1 = document.getElementById('state1');
const district = document.getElementById('district');
const district1 = document.getElementById('district1');
const city = document.getElementById('city');
const city1 = document.getElementById('city1');
// console.log(fname,lname,uname);

fname.addEventListener("blur",()=> {
    console.log("fname is bl");
    let regex = /^[A-Z][a-zA-Z/._/-]{1,10}$/;

    let str = fname.value;
   if (str === "" || str == null) {
       console.log('Empty');
    let obj = document.getElementById("fspan");
    obj.innerText = "First name is required.";
   
    fname1.classList.remove('success');
    fname1.classList.add('error');
   }

    else if (!regex.test(str)){
        console.log('Not match');
        let obj = document.getElementById("fspan");
    obj.innerText = "Invalid First Name";

       fname1.classList.remove('success');
        fname1.classList.add('error');
    }

    else {
    console.log('Match');
    fname1.classList.remove('error');
    fname1.classList.add('success');
    document.getElementById("fspan").innerHTML="";
    }

});

lname.addEventListener("blur",()=> {
    console.log("lname is bl");
    let regex = /^[A-Z][a-zA-Z/._/-]{1,10}$/;
     let str = lname.value;

   if (str === "" || str == null) {
       console.log('Not match');
    let obj = document.getElementById("lspan");
    obj.innerText = "Last name is required.";
    obj.classList.add("show");
      lname1.classList.remove('success');
        lname1.classList.add('error');
   }

    else if (!regex.test(str)){
        console.log('Not match');
        let obj = document.getElementById("lspan");
    obj.innerText = "Invalid Last Name";
    obj.classList.add("show");
       lname1.classList.remove('success');
        lname1.classList.add('error');
    }

    else {
        console.log('Match');
      lname1.classList.remove('error');
        lname1.classList.add('success');
       document.getElementById("lspan").innerHTML="";
    }
});

email.addEventListener("blur",()=> {
    console.log("email is bl");
    let regex=/^[a-zA-Z_]([a-zA-Z0-9\.\-_]+)@([a-zA-Z0-9_\-]+)\.([a-zA-Z]){2,4}$/;
      if (email.value === "" || email.value == null) {
       console.log('Not match');
    let obj = document.getElementById("espan");
    obj.innerText = "Email is required.";
  
      email1.classList.remove('success');
        email1.classList.add('error');
   }
   else if (!regex.test(email.value)) {
    let obj = document.getElementById("espan");
    obj.innerText = "Invalid email address.";
    
 email1.classList.remove('success');
        email1.classList.add('error');
    
  } else {
       email1.classList.remove('error');
        email1.classList.add('success');
    document.getElementById("espan").innerText = "";
  
  }
});
age.addEventListener("blur", () => {
  let regex = /^[1-9]([0-9]){0,2}$/;
  if (age.value === "" || age.value == null) {
    let obj = document.getElementById("aspan");
    obj.innerText = "Age is required.";
    
   age1.classList.remove('success');
        age1.classList.add('error');
   
  } else if (age.value < 18||age.value>110) {
    let obj = document.getElementById("aspan");
    obj.innerText = "You can't vote.";

    age1.classList.remove("success");
    age1.classList.add("error");
    
    
  } else if (!regex.test(age.value)) {
    let obj = document.getElementById("aspan");
    obj.innerText = "Invalid Age.";
    obj.classList.add("show");
   age1.classList.remove("success");
    age1.classList.add("error");

  } else {
   age1.classList.remove('error');
    age1.classList.add('success');
    document.getElementById("aspan").innerHTML="";
  }
});

uname.addEventListener("blur", () => {
  let regex = /^[a-zA-Z]([a-zA-Z0-9/._/-]){2,10}$/;
  console.log("uname is blurred");
  if (uname.value === "" || uname.value == null) {
    let obj = document.getElementById("uspan");
    obj.innerText = "User name is required.";
    obj.classList.add("show");
   uname1.classList.remove('success');
    uname1.classList.add('error');
  
    
  } else if (!regex.test(uname.value)) {
    let obj = document.getElementById("uspan");
    obj.innerText = "Invalid User name.";
    
    obj.classList.add("show");
   uname1.classList.remove('success');
    uname1.classList.add('error');
  
  } else {
     uname1.classList.remove('error');
        uname1.classList.add('success');
        document.getElementById("uspan").classList.remove('show');
       document.getElementById("uspan").innerHTML="";
  }
});

pass.addEventListener("blur", () => {
  if (pass.value === "" || pass.value == null) {
    let obj = document.getElementById("pspan");
    obj.innerText = "Password is required.";
   pass1.classList.remove('success');
    pass1.classList.add('error');

    
  } else if (pass.value.length < 6) {
    let obj = document.getElementById("pspan");
    obj.innerText = "Enter at least 6 characters.";
    
   pass1.classList.remove('success');
    pass1.classList.add('error');

  
  }
  else {
    pass1.classList.remove('error');
    pass1.classList.add('success');
    document.getElementById("pspan").innerHTML="";
  }
});
cpass.addEventListener("blur", () => {
  if (cpass.value === "" || cpass.value == null) {
    let obj = document.getElementById("cspan");
    obj.innerText = "Confirm password is required.";
    cpass1.classList.remove('error2');
   cpass1.classList.remove('success');
    cpass1.classList.add('error');
  } else if (pass.value !== cpass.value) {
    document.getElementById("cspan").innerText =
      "Password and confirm password must match.";

  cpass1.classList.remove('success');
  pass1.classList.remove('success');
  pass1.classList.add('error');
  cpass1.classList.add('error');
    cpass1.classList.add('error2');
  } else {
  cpass1.classList.remove('error');
    cpass1.classList.add('success');
    document.getElementById("cspan").innerHTML="";
  }
});
state.addEventListener("blur", () => {
  let regx = /^[a-zA-Z]([a-zA-Z/-]){3,15}$/;
  if (state.value === "" || state.value == null) {
    let obj = document.getElementById("sspan");
    obj.innerText = "Province is required.";
state1.classList.remove('success');
    state1.classList.add('error');
  } else if (!regx.test(state.value)) {
    let obj = document.getElementById("sspan");
    obj.innerText = "Invalid province name.";
 state1.classList.remove('success');
    state1.classList.add('error');
  } else {
    state1.classList.remove('error');
    state1.classList.add('success');
    document.getElementById("sspan").innerHTML="";
    }
});
city.addEventListener("blur", () => {
  let regx = /^[a-zA-Z]([a-zA-Z/-]){3,15}$/;
  if (city.value === "" || city.value == null) {
    let obj = document.getElementById("ctspan");
    obj.innerText = "City is required.";
city1.classList.remove('success');
    city1.classList.add('error');
  } else if (!regx.test(city.value)) {
    let obj = document.getElementById("ctspan");
    obj.innerText = "Invalid city name.";
 city1.classList.remove('success');
    city1.classList.add('error');
  } else {
    city1.classList.remove('error');
    city1.classList.add('success');
    document.getElementById("ctspan").innerHTML="";
    }
});
district.addEventListener("blur", () => {
  let regx = /^[a-zA-Z]([a-zA-Z/-]){3,15}$/;
  if (district.value === "" || district.value == null) {
    let obj = document.getElementById("dspan");
    obj.innerText = "District is required.";
district1.classList.remove('success');
    district1.classList.add('error');
  } else if (!regx.test(district.value)) {
    let obj = document.getElementById("dspan");
    obj.innerText = "Invalid district name.";
 district1.classList.remove('success');
    district1.classList.add('error');
  } else {
    district1.classList.remove('error');
    district1.classList.add('success');
    document.getElementById("dspan").innerHTML="";
    }
});
