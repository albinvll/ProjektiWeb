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
		?>
        <script>
		window.location.href="../View/index.php";
		alert("Account doesn't exist!");
		</script>
		
		<?php
		
	}

?>
