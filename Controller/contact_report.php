<?php
require('../Model/reportRepo.php');

$email = $_POST["inputEmail"];
$subject = $_POST["inputSubject"];
$message = $_POST["inputMessage"];
if(isset($email) && isset($subject) && isset($message)){
    $report = new Report($email,$subject,$message);
    if(create($report)){
        echo "<script>alert(\"Thank you for your feedback!\");</script>";
        header("location: ../View/contact.php");
    }else{
        echo "<script>alert(\"Error sending message!\")</script>";
    }
}else{
    echo "Not set";
}
?>