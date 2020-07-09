function libriAdmin(){
    var titulli = document.getElementById("titulliInput").value;
    if(titulli.trim()==""){
        alert("Shkruaj Titullin");
        return false;
    }

    return true;
}

// function userAdmin(){

// }