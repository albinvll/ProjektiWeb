<?php
include('../Model/userRepo.php');
$email = $_POST["emailLoginInput"];
$password = $_POST["passwordInput"];
if(isset($email) && isset($password)){
	if(login($email, $password)){
?>
		<script>
			window.location.href="../View/home.php";
		</script>
<?php
	}else{
?>
	<script>
		alert("Account doesn't exist!");
		window.location.href="../View/index.php";
	</script>
<?php
	}
}
?>
