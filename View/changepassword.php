<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../View/css/login.css">
</head>
<body>
<div>
 <form method="POST" action="../Controller/change_password.php" onsubmit="return check()">
    <div class="login-form">
        <label for="">Current password:</label><br>
        <input type="password" name="currentPasswordInput" id="currentPasswordInput">
    </div>
    <div class="login-form">
        <label for="">New password:</label><br>
        <input type="password" name="newPasswordInput" id="emailForgot">
    </div>
    <div class="login-form">
        <label for="">Confirm new password:</label><br>
        <input type="password" name="confirmNewPasswordInput" id="emailForgot">
    </div>

    <div class="butonat-div">
        <button onclick="">
            Change Password
        </button>
    </div>
</form>
<script>
function check(){
    var current = document.getElementById('currentPasswordInput').value;
    var new = document.getElementById('newPasswordInput').value;
    var confNew = document.getElementById('confirmNewPasswordInput').value;
    if(current == null || current.trim()==""){
        alert("Current password can't be empty");
        return false;
    }else if(new == null || new.trim()==""){
        alert("New password can't be empty");
        return false;
    }else if(confNew == null || confNew.trim()==""){
        alert("Confirm new password can't be empty");
        return false;
    }else if(new != confNew){
        alert("Your new password and confirm new password need to be the same");
        return false;
    }else{
        return true;
    }
}
</script>
</div>
</body>
</html> 