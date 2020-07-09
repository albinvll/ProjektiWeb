function kontakto(){
    var email = "";
    var doc=document.getElementById("inputEmail").value;
    if(doc.trim()=="" || doc == null){
        alert("Please write your email");
        return false;
    } else {
        var reg = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
        if(reg.test(doc)==false){
            alert("Invalid email");
            return false;
        } else {
            email=doc;
        }
    }
    var subject=document.getElementsByClassName("subject")[0].value;
    var message=document.getElementsByClassName("message-content")[0].value;
    if(subject.trim()=="" || subject == null){
        alert("Please write the subject");
        return false;
    }else if(message.trim == "" || message == null){
        alert("Please write your message");
        return false;
    }else{
        return true;
    }
}