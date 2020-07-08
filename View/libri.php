<!DOCTYPE html>
<html lang="en">
<head>
    <title>Administrator</title>
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
    <div class="main">
        <div class="left-side">
            <div class="logo">
            <div>
                <img src="Images/bookshop2.png" alt="">
            </div>
            </div>
            <div class="left-side-main">
                <div class="Titujt" style="color: red;">
                    Libri
                </div>
                <div class="Titujt">
                    <a href="user.php">User</a>
                </div>
                <div class="Titujt">
                    <a href="contact.php">Contact</a>
                </div>
                <div class="Titujt">
                    <a href="example1.php">example1</a>
                </div>
                <div class="Titujt">
                    <a href="example2.php">example2</a>
                </div>
                <div class="Titujt">
                    <a href="example3.php">example3</a>
                </div>
            </div>
        </div>
        <div class="right-side">
            <div class="tabela-forma">
                <div class="tabela-div-content">
                   
                </div>
            </div>
            <div class="libri-forma">
                <form action="" method="POST" onsubmit="">
                        <div class="login-form">
                            <label for="">Titulli</label><br>
                            <input type="text" name="titulli" id="titulliInput">
                        </div>
                        <div class="login-form">
                            <label for="">Cmimi</label><br>
                            <input type="text" name="cmimi" id="cmimiInput">
                        </div>
                        <div class="login-form">
                            <label for="">Photo</label><br>
                            <input type="text" name="photo" id="photoInput">
                        </div>
                        <div class="login-form">
                            <label for="">Autori</label><br>
                            <input type="text" name="autori" id="autoriInput">
                        </div>
                        <div class="login-form">
                            <label for="">Data</label><br>
                            <input type="text" name="data" id="dataInput">
                        </div>
                        <div class="butonat-div">
                            <button name="createAcc">
                                Regjistro
                            </button>
                            <button name="createAcc">
                                Fshij
                            </button>
                            <button name="createAcc">
                                Anulo
                            </button>
                        </div>
                </form>
            </div>
        </div>
    </div>
    <script src="javascript/admin.js"></script>
</body>
</html>