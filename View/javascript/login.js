function SignUp(){
    document.getElementById('login').style.display="none";
    document.getElementById('signup').style.display="block";
    document.getElementsByClassName('signUpButton')[0].style.display="none";
    document.getElementsByClassName('signUpButton')[1].style.display="block";
}
function SignIn(){
    document.getElementById('login').style.display="block";
    document.getElementById('signup').style.display="none";
    document.getElementsByClassName('signUpButton')[0].style.display="block";
    document.getElementsByClassName('signUpButton')[1].style.display="none";
}

function checkLogin(){
    var inputEmail = document.getElementById('emailLoginInput').value;
    var inputPassword = document.getElementById('passwordInput').value;
    if(inputEmail.trim() == "" || inputEmail == null ){
    	alert("E-mail is empty");
	return false;
    }else if(inputPassword.trim() == "" || inputPassword == null ){
    	alert("Password is empty");
	return false;
    }else{
    	return true;
    }
}
function CreateAccount(){
    var reg = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;

    if(document.getElementById('nameInput').value.trim()==""){
        alert("Emri zbrazet!");
        return false;
    }else if(document.getElementById('surnameInput').value.trim()==""){
        alert("Mbiemri i zbrazet!");
        return false;
    }else if(document.getElementById('emailRegisterInput').value.trim()==""){
        alert("Email i zbrazet!");
        return false;
    }else if(reg.test(document.getElementById('emailRegisterInput').value) == false){
        alert("Invalid Email Address");
        return false;
    }else if(document.getElementById('passwordSignupInput').value.trim()==""){
        alert("Password i zbrazet!");
        return false;
    }else if(document.getElementById('confirmPasswordInput').value.trim()==""){
        alert("Confirm your password!");
        return false;
    }else if((document.getElementById('passwordSignupInput').value) != (document.getElementById('confirmPasswordInput').value) ){
        alert("Password not matching");
        return false;
    }
    return true;
}
