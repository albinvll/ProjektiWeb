<?php
    require('../Model/db_connection.php');
    session_start();


    if(isset($_GET['delete'])){
        global $connection;

        $id = $_GET['delete'];
        $sql = "DELETE FROM `users` WHERE id=$id";
        $result = mysqli_query($connection,$sql) or die(mysqli_error($connection));
        
        if($result){
            $_SESSION['message'] = "User Deleted Succesfully";
        } else {
            $_SESSION['message'] = "User didn't Deleted Succesfully";
        }
        header("location: ../View/user.php");
        exit();
    }

    $name = "";
    $surname = "";
    $email = "";

    $update = false;

    if(isset($_GET['edit'])){
        global $connection;

        $id = $_GET['edit'];
        $sql = "SELECT * FROM `users` WHERE id=$id";
        $result = mysqli_query($connection,$sql) or die(mysqli_error($connection));
        $row = $result->fetch_array();
        $name = $row['name'];
        $surname = $row['surname'];
        $email = $row['email'];
        $update = true;
        
    }

    if(isset($_POST['anuloButton'])){
        header("location: ../View/user.php");
    }

    if(isset($_POST['ndryshoButton'])){
        global $connection;
        $idd = $_POST['idHidden'];
        $name = $_POST['Emri'];
        $surname = $_POST['Mbiemri'];
        $roli = $_POST['id_login'];

        $sql = "UPDATE `users` SET `name` = '$name' , `surname` = '$surname' , `roli` = $roli WHERE id = $idd";
        $result = mysqli_query($connection,$sql) or die(mysqli_error($connection));
        if($result){
            // Mesazhi me Sukses
            header("location: ../View/user.php");
        }else {
            // Mesazhi pa sukses
            header("location: ../View/user.php");
        }
    }

    require('../Model/userRepo.php');

    if(isset($_POST['createAcc'])){
        $name = $_POST["Emri"];
        $surname = $_POST["Mbiemri"];
        $email = $_POST["Email"];
        $password = $_POST["Password"];
        $roli = $_POST["id_login"];


        $user = new User($name,$surname,$email,$password,$roli);
        if(register($user)){
        ?>
        <script>
            window.location.href="../View/user.php";
        </script>
        <?php
        }else {
            ?>
            <script>
                window.location.href="../View/user.php";
                alert("This email has already been registered");
            </script>
            <?php
        }
    } 

?>