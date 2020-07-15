function check(){
    var current = document.getElementById('cPasswordInput').value;
    var newP = document.getElementById('nPasswordInput').value;
    var confNew = document.getElementById('cNPasswordInput').value;
    if(current == null || current.trim()==""){
        alert("Current password can't be empty");
        return false;
    }else if(newP == null || newP.trim()==""){
        alert("New password can't be empty");
        return false;
    }else if(confNew == null || confNew.trim()==""){
        alert("Confirm new password can't be empty");
        return false;
    }else if(newP != confNew){
        alert("Your new password and confirm new password need to be the same");
        return false;
    }else{
        return true;
    }
}