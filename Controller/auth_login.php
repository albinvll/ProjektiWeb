<?php
include('../Model/userRepo.php');
	$email = $_POST["emailLoginInput"];
	$password = $_POST["passwordInput"];
	if(login($email, $password)){
		if(isAdmin($email)==1){
			header("location:../View/libriAdmin.php");
		}else{
			header("location:../View/home.php");
		}
	}else{

		header("location:../View/index.php");
		?>
        <script>alert("Account doesn't exist!");</script>
		
		<?php
		
	}

?>
