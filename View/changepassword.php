<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../View/css/login.css">
</head>
<body>
<div>
 <form method="POST" action="../Controller/change_password.php">
    <div class="login-form">
        <label for="">Current password:</label><br>
        <input type="password" name="currentPasswordInput" id="currentPasswordInput">
    </div>
    <div class="login-form">
        <label for="">New password:</label><br>
        <input type="password" name="newPasswordInput" id="emailForgot">
    </div>
    <div class="login-form">
        <label for="">Confirm new password:</label><br>
        <input type="password" name="confirmNewPasswordInput" id="emailForgot">
    </div>

    <div class="butonat-div">
        <button onclick="">
            Login
        </button>
    </div>
</form>
</div>
</body>
</html> 