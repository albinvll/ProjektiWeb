<?php
$connection = mysqli_connect('localhost', 'albin', 'aaaaa123!');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'libraria_web');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
?>
