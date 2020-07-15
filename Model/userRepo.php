<?php
require('db_connection.php');
require('user.php');

function register(User $user){
    global $connection;
    $checkuser = mysqli_query($connection, "Select id from users where email='".$user->getEmail()."'");  
    $result = mysqli_num_rows($checkuser);  
    if ($result == 0) {
        $pass = md5($user->getPassword());
        $query = "INSERT INTO `users` (`name`, `surname`, `email`,`password`,`roli`)VALUES ('".$user->getName()."', '".$user->getSurname()."' ,'".$user->getEmail()."', '$pass','".$user->getRoli()."')";
        $register = mysqli_query($connection, $query) or die(mysqli_error($connection));  
        return $register;  
    } else {  
        return false;  
    }
}
function login($email, $password){
    global $connection;
    $pass = md5($password);
    $check = mysqli_query($connection,"Select * from users where email='$email' and password='$pass'");  
    $data = mysqli_fetch_array($check);  
    $result = mysqli_num_rows($check);  
    if ($result == 1) { 
        session_start(); 
        $_SESSION['login'] = true;  
        $_SESSION['id'] = $data['id'];
        $_SESSION['email'] = $data['email'];
        $_SESSION['roli'] = $data['roli'];
        $_SESSION['name'] = $data['name'];  
        $_SESSION['surname'] = $data['surname'];  
        return true;  
    } else {  
        return false;
    } 
}

function session() {  
    if (isset($_SESSION['login'])) {  
        return $_SESSION['login'];  
    }  
}

function logout(){
    $_SESSION['login'] = false;  
    session_destroy(); 
}

function delete(User $user){
    global $connection;
    $checkuser = mysqli_query($connection, "Select id from users where email='".$user->getEmail()."'");
    $result = mysqli_num_rows($checkuser);
    if($result == 1){
        $query = "DELETE FROM user WHERE email='".$user->getEmail()."'";
        $delete = mysqli_query($connection,$query) or die(mysqli_error($connection)); 
        return $delete;
    }else{
        return false;
    }
}

function edit(User $editedUser){
    global $connection;
    if(session()){
        $pass = md5($editedUser->getPassword());
        $query = "UPDATE `users` SET `name` = '".$editedUser->getName()."', `surname` = '".$editedUser->getSurname()."', `email` = '".$editedUser->getEmail()."', `password` = '$pass', `roli` = '".$editedUser->getRoli()."' WHERE `id` = '".$_SESSION['id']."'";
        $toEdit = mysqli_query($connection,$query);
    }else{
        return false;
    }
}

function isAdmin($email){
    global $connection;
    $check = mysqli_query($connection,"Select roli from users where email='$email'");  
    $data = mysqli_fetch_array($check);  
    return $data['roli'];
}

function editPassword($new){
    global $connection;
    session_start();
        if(session()==1){
            $pass = md5($new);
            $query = "UPDATE `users` SET `password` = '$new' WHERE `id`='".$_SESSION['id']."'";
            mysqli_query($connection, $query);
        }else{
            return false;
        }
    }

function getPassword(){
    global $connection;
    session_start();
    if(session() == 1){
        $query = "SELECT `password` FROM `users` WHERE `id`='".$_SESSION['id']."'";
        $result = mysqli_query($connection, $query);
        $row = $result->fetch_assoc();
        return $row['password'];
    }else{
        return null;
    }
}
?>
