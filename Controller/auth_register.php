<?php
    require('../Model/userRepo.php');

    if(isset($_POST['createAcc'])){
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $email = $_POST["emailRegisterInput"];
        $password = $_POST["passwordSignupInput"];
        $roli = 0;

        $user = new User($name,$surname,$email,$password,$roli);
        if(register($user)){
            header("location: ../View/index.php");
        }else {
            ?>
            <script>
                window.location.href="../View/index.php";
                alert("This email has already been registered");
            </script>
            <?php
        }
    } else {
        ?>
        <script>
            window.location.href="../View/index.php";
            alert("Account didn't create");
        </script>
        <?php
    }

    
?>