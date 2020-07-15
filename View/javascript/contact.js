function kontakto(){
    var reg = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;

    var email =document.getElementById("inputEmail").value;
    var subject=document.getElementsByClassName("subject")[0].value;
    var message=document.getElementsByClassName("message-content")[0].value;
    if(email.trim()==""){
        alert("Please write the email");
        return false;
    }else if(reg.test(email)==false){
        alert("Invalid Email Address");
        return false;
    }else if(subject.trim()=="" || subject == null){
        alert("Please write the subject");
        return false;
    }else if(message.trim() == "" || message == null){
        alert("Please write your message");
        return false;
    }else{
        return true;
    }
}