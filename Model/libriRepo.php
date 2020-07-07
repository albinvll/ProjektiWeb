<?php
require('db_connection.php');
require('libri.php');

function createLibri(Libri $libri){
    global $connection;
    $checklibri = mysqli_query($connection, "Select id from libri where title='".$libri->getTitle()."'");  
    $result = mysqli_num_rows($checklibri);  
    if ($result == 0) {
        // $query = "INSERT INTO `libri` (`title`, `price`, `photo`,`author`,`date`)VALUES ('".$libri->getTitle()."', '".$libri->getPrice()."' ,'".$libri->getPhoto()."', '".$libri->getAuthor()."','".$libri->getDate()."')";
        $query = "INSERT INTO `libri` (`title`, `price`, `photo`, `author`, `date`) VALUES ('".$libri->getTitle()."', '".$libri->getPrice()."', '".$libri->getPhoto()."', '".$libri->getAuthor()."', '".$libri->getDate()."')";
        // $query = 'INSERT INTO `libri` (`title`, `price`, `photo`,`author`,`date`) VALUES("'.$libri->getTitle().'","'.$libri->getPrice().'","'.$libri->getPhoto().'","'.$libri->getAuthor().'","'.$libri->getDate().'")';
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
    $query = "UPDATE `libri` SET `title` = '".$libri->getTitle()."', `price` = '".$libri->getPrice()."', `photo` = '".$libri->getPhoto()."', `author` = '".$libri->getAuthor()."', `date` = '".$libri->getDate()."' WHERE `id` = '".$libri->getId()."'";
    $toEdit = mysqli_query($connection,$query);
}

$la =new Libri("ss",50.25,"GratefulAndGive.png","Naim Frasheri","1995-05-12");
if(createLibri($la)){
    echo "Succesfully";
}else{
    echo "Failed";
}

?>