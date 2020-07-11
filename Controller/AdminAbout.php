<?php
    require('../Model/db_connection.php');

    if(isset($_GET['delete'])){
        global $connection;

        $id = $_GET['delete'];
        $sql = "DELETE FROM `about` WHERE id=$id";
        $result = mysqli_query($connection,$sql) or die(mysqli_error($connection));
        
        if($result){
            $_SESSION['message'] = "Worker Deleted Succesfully";
        } else {
            $_SESSION['message'] = "Worker didn't Deleted Succesfully";
        }
        header("location: ../View/aboutAdmin.php");
        exit();
    }

    $emri = "";
    $mbiemri = "";
    $profesioni = "";
    $foto = "";

    $update = false;

    if(isset($_GET['edit'])){
        global $connection;

        $id = $_GET['edit'];
        $sql = "SELECT * FROM `about` WHERE id=$id";
        $result = mysqli_query($connection,$sql) or die(mysqli_error($connection));
        $row = $result->fetch_array();
        $emri = $row['emri'];
        $mbiemri = $row['mbiemri'];
        $profesioni = $row['profesioni'];
        $foto = $row['foto'];
        $update = true;
    }

    if(isset($_POST['anuloButton'])){
        header("location: ../View/aboutAdmin.php");
    }

    if(isset($_POST['ndryshoButton'])){
        global $connection;
        $idd = $_POST['idHidden'];
        $emri = $_POST['emri'];
        $mbiemri = $_POST['mbiemri'];
        $profesioni = $_POST['profesioni'];
        $foto = $_POST['foto'];

        // echo $idd.' '.$titulli.' '.$cmimi.' '.$photo.' '.$autor.' '.$data;
 
        $sql = "UPDATE `about` SET `mbiemri` = '$mbiemri' , `profesioni` = '$profesioni' , `foto` = '$foto'  WHERE id = $idd";
        $result = mysqli_query($connection,$sql) or die(mysqli_error($connection));
        if($result){
            // Mesazhi me Sukses
            header("location: ../View/aboutAdmin.php");
        }else {
            // Mesazhi pa sukses
            header("location: ../View/aboutAdmin.php");
        }
    }

    require('../Model/aboutRepo.php');

    if(isset($_POST['createWorker'])){
        $emri = $_POST['emri'];
        $mbiemri = $_POST['mbiemri'];
        $profesioni = $_POST['profesioni'];
        $foto = $_POST['foto'];

        // echo $titulli.' '.$cmimi.' '.$photo.' '.$autor.' '.$data;
        $about = new About($emri,$mbiemri,$profesioni,$foto);
        if(createWorker($about)){
        ?>
        <script>
            window.location.href="../View/aboutAdmin.php";
        </script>
        <?php
        }else {
            ?>
            <script>
                window.location.href="../View/aboutAdmin.php";
                alert("This worker has already been registered");
            </script>
            <?php
        }
    } 

?>