<?php
require('db_connection.php');
require('news.php');
function create(News $news){
    global $connection;
    $checknews = mysqli_query($connection, "Select id from news where id='".$news->getId()."'");  
    $result = mysqli_num_rows($checknews);  
    if ($result == 0) {
        $query = "INSERT INTO `news` (`title`, `description`,)VALUES ('".$news->getTitle()."' '".$user->getDescription()."')";
        $create = mysqli_query($connection, $query) or die(mysqli_error($connection));  
        return $create;  
    } else {  
        return false;  
    }
}

function delete(News $news){
    global $connection;
    $checknews = mysqli_query($connection, "Select id from users where id='".$news->getId()."'");
    $result = mysqli_num_rows($checknews);
    if($result == 1){
        $query = "DELETE FROM news WHERE id='".$news->getId()."'";
        $delete = mysqli_query($connection,$query) or die(mysqli_error($connection)); 
        return $delete;
    }else{
        return false;
    }
}


?>