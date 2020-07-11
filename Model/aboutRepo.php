<?php
require('db_connection.php');
require('about.php');

function createWorker(About $about){
    global $connection;
    $checkabout = mysqli_query($connection, "Select id from about where emri='".$about->getEmri()."'");  
    $result = mysqli_num_rows($checkabout);  
    if ($result == 0) {
        $query = "INSERT INTO `about` (`emri`, `mbiemri`, `profesioni`, `foto`) VALUES ('".$about->getEmri()."', '".$about->getMbiemri()."', '".$about->getProfesioni()."', '".$about->getFoto()."')";
        $create = mysqli_query($connection, $query) or die(mysqli_error($connection));  
        return $create;  
    } else {  
        return false;  
    }
}

function delete(About $about){
    global $connection;
    $checkabout = mysqli_query($connection, "Select id from about where emri='".$about->getEmri()."'");
    $result = mysqli_num_rows($checkabout);
    if($result == 1){
        $query = "DELETE FROM about WHERE emri='".$about->getEmri()."'";
        $delete = mysqli_query($connection,$query) or die(mysqli_error($connection)); 
        return $delete;
    }else{
        return false;
    }
}

function edit(About $about){
    global $connection;
        $emri = $about->getEmri();
        $mbiemri = $about->getMbiemri();
        $profesioni = $about->getProfesioni();
        $foto = $about->getFoto();
        $id = $about->getId();
        
    $sql = "UPDATE `about` SET `emri` = '$emri' , mbiemri='$mbiemri' , profesioni='$profesioni' , foto='$foto' WHERE id=$id";
    $toEdit = mysqli_query($connection,$sql);
}

?>
