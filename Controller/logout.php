<?php
require('../Model/userRepo.php');
session_start();
logout();
header("location:../View/home.php");
?>