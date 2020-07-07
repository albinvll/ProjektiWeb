<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="icon" href="Images/icon.png">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="backgroundNgjyra">
    <div class="main">
        <div class="login-img-div">
            <img src="Images/loginpic.png" alt="">
            <div class="signUpButton">
                <button onclick="SignUp()" id="registerButton">
                    Sign Up
                </button>
            </div>
            <div class="signUpButton">
                <button onclick="SignIn()" id="registerButton">
                    Back to Login
                </button>
            </div>
        </div>
        <div class="content">
            <div class="login-content" id="login">
                <p>
                    Login
                </p>
		<form action="../Controller/auth_login.php" method="POST" onsubmit="return checkLogin()">
                    <div class="login-form">
                        <label for="">E-mail</label><br>
                        <input type="text" name="emailLoginInput" id="emailLoginInput">
                    </div>
                    <div class="login-form">
                        <label for="">Password</label><br>
                        <input type="password" name="passwordInput" id="passwordInput">
                    </div>
                    <div class="butonat-div">
                        <button onclick="" id="loginButton">
                            Login
                        </button>
                    </div>
                </form>
            </div>
            <div class="regist-content" id="signup">
                <p>
                    Sign Up
                </p>
                <form action="../Controller/auth_register.php" method="POST" onsubmit="return CreateAccount()">
                    <div class="login-form">
                        <label for="">Name</label><br>
                        <input type="text" name="name" id="nameInput">
                    </div>
                    <div class="login-form">
                        <label for="">Surname</label><br>
                        <input type="text" name="surname" id="surnameInput">
                    </div>
                    <div class="login-form">
                        <label for="">Email</label><br>
                        <input type="email" name="emailRegisterInput" id="emailRegisterInput">
                    </div>
                    <div class="login-form">
                        <label for="">Password</label><br>
                        <input type="password" name="passwordSignupInput" id="passwordSignupInput">
                    </div>
                    <div class="login-form">
                        <label for="">Confirm Password</label><br>
                        <input type="password" name="confirmPasswordInput" id="ConfirmPasswordInput">
                    </div>
                    <div class="butonat-div">
                        <button name="createAcc">
                            Sign Up
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    <script src="javascript/login.js"></script>
</body>
</html>
