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
                <div class="Titujt">
                    <a href="libri.php">Libri</a>
                </div>
                <div class="Titujt" style="color: red;">
                    User
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
            <table id="table" class="tabelaUser">
                <tr>
                    <th>Emri</th>
                    <th>Mbiemri</th>   
                    <th>Email</th>
                    <th>Password</th>                 
                </tr>
                <?php
                    $connection = mysqli_connect('localhost', 'root', '','libraria_web');
                    if($connection->connect_error){
                        die("Connection failed:". $connection->connect_error);
                    }

                    $sql = "select name, surname, email, password from users";
                    $result = $connection-> query($sql);

                    if ($result->num_rows > 0){
                        while($row = $result-> fetch_assoc()){
                            echo "<tr><td>". $row["name"] ."</td><td>". $row["surname"] ."</td><td>". $row["email"] ."</td><td>". $row["password"] ."</td></tr>";
                        }
                            echo "</table>";
                        }else{
                            echo "0 result";
                    }
                    $connection-> close();

                ?>
            
                <script>
                    function selectedRowToInput(){
                        var rIndex,table = document.getElementById("table");
                        for(var i=1;i<table.rows.length;i++){
                            table.rows[i].onclick = function(){
                                rIndex = this.rowIndex;
                                document.getElementById("name").value = this.cells[0].innerHTML;
                                document.getElementById("surname").value = this.cells[1].innerHTML;
                                document.getElementById("email").value = this.cells[2].innerHTML;
                                document.getElementById("password").value = this.cells[3].innerHTML;
                            };
                        }
                        selectedRowToInput();
                    } 
                </script>
            </table>


        </div>

            <div class="libri-forma">
                <form action="" method="POST" onsubmit="">
                        <div class="login-form">
                            <label for="">Emri</label><br>
                            <input type="text" name="Emri" id="emriInput">
                        </div>
                        <div class="login-form">
                            <label for="">Mbiemri</label><br>
                            <input type="text" name="Mbiemri" id="mbiemriInput">
                        </div>
                        <div class="login-form">
                            <label for="">Email</label><br>
                            <input type="text" name="Email" id="emailInput">
                        </div>
                        <div class="login-form">
                            <label for="">Password</label><br>
                            <input type="password" name="password" id="passwordInput">
                        </div>

                        <!-- drop box -->

                        <div class="combobox">
                            <h4>0-User</h4>
                            <h4>1-Admin</h4>
                            <select name="id_login" class="chooseform">
                                <option value="1">0</option>
                                <option value="2">1</option>
                            </select>                        
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