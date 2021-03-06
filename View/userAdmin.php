<?php
    session_start();
    $roli = $_SESSION['roli'];
    if($_SESSION['roli']!=1){
        header("location: index.php");
    }
    if(isset($_SESSION['login'])!=true){
        header("location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Administrator</title>
    <link rel="icon" href="Images/icon.png">
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
    <div class="main">
        <div class="left-side">
            <div class="logo">
            <div>
                <a href="home.php"><img src="Images/bookshop2.png" alt=""></a>
            </div>
            </div>
            <div class="left-side-main">
                <div class="Titujt">
                    <a href="libriAdmin.php">Libri</a>
                </div>
                <div class="Titujt" style="color: red;">
                    User
                </div>
                <div class="Titujt">
                    <a href="contactadmin.php">Contact</a>
                </div>
                <div class="Titujt">
                    <a href="aboutAdmin.php">About</a>
                </div>
            </div>
            <div class="logoutButton">
                <a href="../Controller/logout.php">LOG OUT</a>
            </div>
        </div>
        <div class="right-side">
            <?php
                require_once "../Controller/AdminUser.php";
                // session_start();
                // if(isset($_SESSION['message'])){
                //     echo $_SESSION['message'];
                //     unset($_SESSION['message']);
                // }
            ?>
            
            <div class="tabela-forma">
            <table id="table" class="tabelaUser">
                <tr>
                    <th>Emri</th>
                    <th>Mbiemri</th>   
                    <th>Email</th>
                    <th>Roli</th>
                    <th colspan="2">Action</th>                 
                </tr>
                <?php
                    require "../Model/db_connection.php";
                    global $connection;

                    $sql = "select id , name, surname, email, roli from users";
                    $result = $connection->query($sql);

                    if ($result->num_rows > 0){
                        while($row = $result-> fetch_assoc()){
                            echo "<tr><td>". $row["name"] ."</td><td>". $row["surname"] ."</td><td>". $row["email"] ."</td><td>". $row["roli"] ."</td>";
                            ?>
                            <td>
                                <a href="userAdmin.php?edit=<?php echo $row['id']; ?>">Edit</a>
                                <a href="../Controller/AdminUser.php?delete=<?php echo $row['id']; ?>">Delete</a>
                            </td>
                            </tr>
                            <?php
                        }
                            echo "</table>";
                    }else{
                        echo "0 result";
                    }
                    $connection->close();

                ?>
            </table>


        </div>

            <div class="libri-forma">
                <form action="../Controller/AdminUser.php" method="POST" onsubmit="return userAdmin()">
                        <div class="login-form">
                            <label for="">Emri</label><br>
                            <input type="text" name="Emri" id="emriInput" value="<?php echo $name; ?>">
                            <input type="hidden" name="idHidden" id="id" value="<?php echo $id; ?>">
                        </div>
                        <div class="login-form">
                            <label for="">Mbiemri</label><br>
                            <input type="text" name="Mbiemri" id="mbiemriInput" value="<?php echo $surname; ?>">
                        </div>
                        <div class="login-form">
                            <label for="">Email</label><br>
                            <input type="text" name="Email" id="emailInput" value="<?php echo $email; ?>">
                        </div>
                        <?php
                            if(!$update){
                                ?>
                                    <div class="login-form">
                                        <label for="">Password</label><br>
                                        <input type="password" name="Password" id="passwordInput">
                                    </div>
                                <?php
                            }
                        ?>
                        <!-- drop box -->

                        <div class="combobox">
                            <h4>0-User</h4>
                            <h4>1-Admin</h4>
                            <select name="id_login" class="chooseform">
                                <option value="0">0</option>
                                <option value="1">1</option>
                            </select>                        
                        </div>

                        
                        <div class="butonat-div">
                            <?php
                                if($update){
                                    ?>
                                        <button type="submit" name="ndryshoButton">
                                            Ndrysho
                                        </button>
                                    <?php
                                } else {
                                    ?>
                                        <button name="createAcc">
                                            Ruaj
                                        </button>
                                    <?php
                                }
                            ?>
                            
                            <button name="anuloButton">
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