fname.addEventListener("blur",()=> {
    console.log("fname is bl");
    let regex = /^[a-zA-Z]([a-zA-Z/._/-]){1,10}$/;
    let str = fname.value;
   
    if (regex.test(str)){
        console.log('It matched');

        fname1.classList.remove('error');
        fname1.classList.add('success');
       fspan_hide();
 
    }
    else {
        fname1.classList.remove('success');
        fname1.classList.add('error');
       fspan_show();

       
    }
    function fspan_show() {
  var element = document.getElementById("fspan");
  element.classList.remove('hide');
  element.classList.add('show');
  
} 
 function fspan_hide() {
  var element = document.getElementById("fspan");
  element.classList.remove('show');
  element.classList.add('hide');
 }
})

//WOrking

fname.addEventListener("blur",()=> {
    console.log("fname is bl");
    let regex = /^[a-zA-Z]([a-zA-Z/._/-]){1,10}$/;
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