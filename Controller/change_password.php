<?php
    require("../Model/userRepo.php");
    
    $old = getPassword();
    echo $_POST['currentPasswordInput'];
    echo $_POST['newPasswordInput'];
    echo $_POST['confirmNewPasswordInput'];
    if(isset($_POST['changePass'])){
    $current = md5($_POST['currentPasswordInput']);
    $new = $_POST['newPasswordInput'];
    $confirmNew = $_POST['confirmNewPasswordInput'];
        if($current == $old){
            if($new == $confirmNew){
                session_start();
                editPassword(md5($new));
                logout();
                header("location:../View/index.php");
            }
        }else{
            echo "<script>alert(\"Your current password doesn't match your old one\")</script>";
        }
    }else{
        echo "<script>alert(\"Error\")</script>";
    }
?>