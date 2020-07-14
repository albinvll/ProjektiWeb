<?php
    require("../Model/userRepo.php");
    
    $current = md5($_POST['currentPasswordInput']);
    $old = getPassword();
    $new = $_POST['newPasswordInput'];
    $confirmNew = $_POST['confirmNewPasswordInput'];
    if(isset($current) && isset($new) && isset($confirmNew)){
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
    }
?>