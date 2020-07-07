<?php
require('db_connection.php');
require('libri.php');

function createLibri(Libri $libri){
    global $connection;
    $checklibri = mysqli_query($connection, "Select id from libri where title='".$libri->getTitle()."'");  
    $result = mysqli_num_rows($checklibri);  
    if ($result == 0) {
        $query = "INSERT INTO `libri` (`title`, `price`, `photo`, `author`, `date`) VALUES ('".$libri->getTitle()."', '".$libri->getPrice()."', '".$libri->getPhoto()."', '".$libri->getAuthor()."', '".$libri->getDate()."')";
        $create = mysqli_query($connection, $query) or die(mysqli_error($connection));  
        return $create;  
    } else {  
        return false;  
    }
}

function delete(Libri $libri){
    global $connection;
    $checklibri = mysqli_query($connection, "Select id from libri where title='".$libri->getTitle()."'");
    $result = mysqli_num_rows($checklibri);
    if($result == 1){
        $query = "DELETE FROM libri WHERE title='".$libri->getTitle()."'";
        $delete = mysqli_query($connection,$query) or die(mysqli_error($connection)); 
        return $delete;
    }else{
        return false;
    }
}

function edit(Libri $libri){
    global $connection;
        $title = $libri->getTitle();
        $price = $libri->getPrice();
        $photo = $libri->getPhoto();
        $author = $libri->getAuthor();
        $date = $libri->getDate();
        $id = $libri->getId();
        
    $sql = "UPDATE libri SET price='$price' , photo='$photo' , author='$author' , date='$date' WHERE id=$id";
    $toEdit = mysqli_query($connection,$sql);
}
?>