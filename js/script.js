let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
    shoppingCart.classList.remove('active');
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
}



let loginForm = document.querySelector('.login-form');

document.querySelector('#login-btn').onclick = () =>{
    loginForm.classList.toggle('active');
    searchForm.classList.remove('active');
    shoppingCart.classList.remove('active');
    navbar.classList.remove('active');
}

let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    searchForm.classList.remove('active');
    shoppingCart.classList.remove('active');
    loginForm.classList.remove('active');
}

window.onscroll = () =>{
    searchForm.classList.remove('active');
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
}


function nextForm(){
    var usernR = document.getElementById('Username').value;
    var passR = document.getElementById('Password').value;
    var cpassR = document.getElementById('cPassword').value;
    var emlR = document.getElementById('Email').value;
    var emri = document.getElementById('Name').value;
    var phone = document.getElementById('PhoneNumber').value;
    var PhoneNumber = /^[0-9]+$/
    if (emri.length < 6) {
        alert('Please enter a valid name, longer than 6 characters');
    }
    else if (usernR.length < 4) {
        alert('Please enter a valid username, longer than 4 characters');
    }
    else if (emlR.includes(' ')) {
        alert('Please enter a vaid email');
    }
    else if (!emlR.endsWith(".com")) {
        alert('please enter a valid email');
    }
    else if (!emlR.includes('@')) {
        alert('please enter a valid email');
    }
    else if(!PhoneNumber.test(phone)){
        alert('Please enter a valid phone number');
    }
    else if (passR.length < 8 || passR === passR.toLowerCase() || passR === passR.toUpperCase() || !stringContainsNumber(passR)) {
        alert('Your password must be longer than 8 characters and contain lowercase and uppercase characters as well as at least one number!');
    }
    else if (passR != cpassR) {
        alert('Please confirm your password correctly!');
    }
    else{
        alert('You have registered succsesfully');
        location.href = 'index.php';
        return true;
    }
}
function stringContainsNumber(_input) {
    let string1 = String(_input);
    for (let i = 0; i < string1.length; i++) {
        if (parseInt(string1.charAt(i))) {
            return true;
        }
    }
    return false;
}

function validateForm(){
var emailSign = document.getElementById('emailSign').value;
var passSign = document.getElementById('passSign').value;
if(emailSign!='email_provuese@gmail.com'||passSign!='CSEweb2021'){
alert("please check your email or password!");
}
else {
setTimeout(function(){window.location.reload();},10);
}
}
