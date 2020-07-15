<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change password</title>
    <link rel="stylesheet" href="../View/css/login.css">
</head>
<body>
<div class="backgroundNgjyra">
    <div class="changePasswordDiv">
        <form method="POST" action="../Controller/change_password.php" onsubmit="return check()">
            <div class="login-form">
                <label for="">Current password:</label><br>
                <input type="password" name="currentPasswordInput" id="cPasswordInput">
            </div>
            <div class="login-form">
                <label for="">New password:</label><br>
                <input type="password" name="newPasswordInput" id="nPasswordInput">
            </div>
            <div class="login-form">
                <label for="">Confirm new password:</label><br>
                <input type="password" name="confirmNewPasswordInput" id="cNPasswordInput">
            </div>

            <div class="butonat-div">
                <button name="changePass">
                    Change
                </button>
            </div>
        </form>
    </div>
</div>
<script src="javascript/changepassword.js"></script>
</body>
</html> 