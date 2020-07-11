<?php
    require('../Model/db_connection.php');

    if(isset($_GET['delete'])){
        global $connection;

        $id = $_GET['delete'];
        $sql = "DELETE FROM `reports` WHERE id=$id";
        $result = mysqli_query($connection,$sql) or die(mysqli_error($connection));
        
        if($result){
            $_SESSION['message'] = "User Deleted Succesfully";
        } else {
            $_SESSION['message'] = "User didn't Deleted Succesfully";
        }
        header("location: ../View/contactadmin.php");
        exit();
    }

    $mesazhi = "";

    if(isset($_GET['msg'])){
        global $connection;

        $id = $_GET['msg'];
        $sql = "SELECT * FROM `reports` WHERE id=$id";
        $result = mysqli_query($connection,$sql) or die(mysqli_error($connection));
        $row = $result->fetch_array();
        $mesazhi = $row['content'];
    }
?>