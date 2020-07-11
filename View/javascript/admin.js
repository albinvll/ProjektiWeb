function libriAdmin(){
    var titulli = document.getElementById("titulliInput").value;
    var cmimi = document.getElementById("cmimiInput").Value;
    var photo = document.getElementById("photoInput").value;
    var autori = document.getElementById("autoriInput").value;
    var data = document.getElementById("dataInput").value;
    if(titulli == "" || cmimi == "" || photo == "" || autori == "" || data == ""){
        alert("Mbush te gjitha kolonat");
        return false;
    }
    return true;
}

function userAdmin(){
    var emri = document.getElementById("emriInput").value;
    var mbiemri = document.getElementById("mbiemriInput").value;
    var email = document.getElementById("emailInput").value;
    var password = document.getElementById("passwordInput").value;
    if(emri == "" || mbiemri == "" || email == "" || password == ""){
        alert("Mbush te gjitha kolonat");
        return false;
    }
    return true;
}

function contactAdmin(){
    var econtact = document.getElementById("econtactInput").value;
    var subject = document.getElementById("subjectInput").value;
    var sentdate = document.getElementById("sentdateInput").value;
    if(econtact == "" || subject == "" || sentdate == ""){
        alert("Mbush te gjitha kolonat");
        return false;
    }
    return true;
}

function aboutAdmin(){
    var emriAbout = document.getElementById("emriAboutInput").value;
    var mbiemriAbout = document.getElementById("mbiemriAboutInput").value;
    var profesioniAbout = document.getElementById("profesioniAboutInput").value;
    var fotoAbout = document.getElementById("fotoAboutInput").value;
    if(emriAbout == "" || mbiemriAbout == "" || profesioniAbout == "" || fotoAbout == ""){
        alert("Mbush te gjitha kolonat");
        return false;
    }
    return true;
}