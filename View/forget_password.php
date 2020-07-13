<head>
    <link rel="stylesheet" href="../View/css/login.css">
</head>
<body style="background-image:url(Images/photo2-home.jpg); background-size:cover;background-repeat: no-repeat;">
    <div class="login-content" style="margin:0 auto;padding:30%;">
        <form>
        <div class="login-form">
            <label for="">E-mail</label><br>
            <input type="text" name="emailForgot" id="emailForgot">
        </div>
        <div class="butonat-div">
            <button onclick="func()" id="forgotButton">
                Send reset
            </button>
        </div>
        <script>
            function func() {
                alert("Thank you, we will send you an email to recover your password if it exists in our system");
            }
        </script>
        </form>
    </div>
</body>