<?php
    require('../Model/db_connection.php');
    session_start();

    if(isset($_GET['delete'])){
        global $connection;

        $id = $_GET['delete'];
        $sql = "DELETE FROM `libri` WHERE id=$id";
        $result = mysqli_query($connection,$sql) or die(mysqli_error($connection));
        
        if($result){
            $_SESSION['message'] = "User Deleted Succesfully";
        } else {
            $_SESSION['message'] = "User didn't Deleted Succesfully";
        }
        header("location: ../View/libriAdmin.php");
        exit();
    }

    $titulli = "";
    $cmimi = "";
    $photo = "";
    $autor = "";
    $data = "";

    $update = false;

    if(isset($_GET['edit'])){
        global $connection;

        $id = $_GET['edit'];
        $sql = "SELECT * FROM `libri` WHERE id=$id";
        $result = mysqli_query($connection,$sql) or die(mysqli_error($connection));
        $row = $result->fetch_array();
        $titulli = $row['title'];
        $cmimi = $row['price'];
        $photo = $row['photo'];
        $autor = $row['author'];
        $data = $row['date'];
        $update = true;
    }

    if(isset($_POST['anuloButton'])){
        header("location: ../View/libriAdmin.php");
    }

    if(isset($_POST['ndryshoButton'])){
        global $connection;
        $idd = $_POST['idHidden'];
        $titulli = $_POST['titulli'];
        $cmimi = $_POST['cmimi'];
        $photo = $_POST['photo'];
        $autor = $_POST['autori'];
        $data = $_POST['data'];

        // echo $idd.' '.$titulli.' '.$cmimi.' '.$photo.' '.$autor.' '.$data;
 
        $sql = "UPDATE `libri` SET `price` = $cmimi , `photo` = '$photo' , `author` = '$autor' , `date` = '$data'  WHERE id = $idd";
        $result = mysqli_query($connection,$sql) or die(mysqli_error($connection));
        if($result){
            // Mesazhi me Sukses
            header("location: ../View/libriAdmin.php");
        }else {
            // Mesazhi pa sukses
            header("location: ../View/libriAdmin.php");
        }
    }

    require('../Model/libriRepo.php');

    if(isset($_POST['createLiber'])){
        $titulli = $_POST['titulli'];
        $cmimi = $_POST['cmimi'];
        $photo = $_POST['photo'];
        $autor = $_POST['autori'];
        $data = $_POST['data'];

        // echo $titulli.' '.$cmimi.' '.$photo.' '.$autor.' '.$data;
        $libri = new Libri($titulli,$cmimi,$photo,$autor,$data);
        if(createLibri($libri)){
        ?>
        <script>
            window.location.href="../View/libriAdmin.php";
        </script>
        <?php
        }else {
            ?>
            <script>
                window.location.href="../View/libriAdmin.php";
                alert("This book has already been registered");
            </script>
            <?php
        }
    } 

?>