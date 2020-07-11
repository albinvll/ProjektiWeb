<head>
    <link rel="stylesheet" href="../View/css/login.css">
</head>
<form>
    <div class="login-form">
        <label for="">E-mail</label><br>
        <input type="text" name="emailForgot" id="emailForgot">
    </div>
    <div class="butonat-div">
        <button onclick="func()" id="forgotButton">
            Login
        </button>
    </div>
    <script>
        function func() {
            alert("Thank you, we will send you an email to recover your password if it exists in our system");
        }
    </script>
</form>
