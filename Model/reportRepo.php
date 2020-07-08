<?php
require('db_connection.php');
require('report.php');
function create(Report $report){
    global $connection;
    $query = "INSERT INTO `reports` (`email`, `subject`,`content`,`sentdate`)VALUES('".$report->getEmail()."', '".$report->getSubject()."','".$report->getContent()."','".date("Y-m-d H:i:s")."')";
    $create = mysqli_query($connection, $query) or die(mysqli_error($connection));  
    return $create;  
}

function delete($subject){
    global $connection;
    $checknews = mysqli_query($connection, "Select id from users where subject='$subject'");
    $result = mysqli_num_rows($checknews);
    if($result == 1){
        $query = "DELETE FROM `reports` WHERE subject='subject'";
        $delete = mysqli_query($connection,$query) or die(mysqli_error($connection)); 
        return $delete;
    }else{
        return false;
    }
}
?>