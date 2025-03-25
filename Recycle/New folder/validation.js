
function clearErrors(){
    errors = document.getElementsByClassName('formerror');
    for(let item of errors){
        item.innerHTML = "";
    }
}
function seterror(id, error) {
element = document.getElementById(id);
element.getElementsByClassName('formerror')[0].innerHTML = error;
}

function validateForm() {

var returnval = true;
clearErrors();

var fname = document.forms["myform"]["fname"].value;
if(fname.length>12){
    seterror("fname1","*First Name is too long!");
    returnval = false;
}

//lname
var lname = document.forms["myform"]["lname"].value;
if(lname.length>12){
    seterror("lname1","*Last Name is too long!");
    returnval = false;
}
var uname = document.forms["myform"]["uname"].value;
if(uname.length>12){
    seterror("uname1","*User Name is too long!");
    returnval = false;
}
var email = document.getElementById('email').value;
if(email.indexOf('@') <= 0){
    seterror("email1","*Invalid email @ddress");
    returnval = false;
}
if((email.charAt(email.length-4)!='.')&&(email.charAt(email.length-3) !='.'))
{
    seterror("email1","*Invalid email Address");
    return false;
}
var age = document.getElementById('age').value;
if(isNaN(age)){
    seterror("age1","*Age should be in number!");
    returnval = false;
}
return returnval;
}

//under body copy above