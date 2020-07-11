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
                    <a href="libriAdmin.php">Libri</a>
                </div>
                <div class="Titujt">
                    <a href="userAdmin.php">User</a>
                </div>
                <div class="Titujt">
                    <a href="contactAdmin.php">Contact</a>
                </div>
                <div class="Titujt" style="color: red;">
                    About
                </div>
            </div>
        </div>
        <div class="right-side">
            <?php
                    require_once "../Controller/AdminAbout.php";
                ?>
                
                <div class="tabela-forma">
                <table id="tabelaAbout" class="tabelaUser">
                    <tr>
                  
                        <th>Emri</th>
                        <th>Mbiemri</th>
                        <th>Profesioni</th>
                        <th>Foto</th>
                        <th colspan="2">Action</th>
                    </tr>   
                    <?php
                        require "../Model/db_connection.php";
                        global $connection;

                        $sql = "select id , emri, mbiemri, profesioni, foto from about";
                        $result = $connection->query($sql);

                        if ($result->num_rows > 0){
                            while($row = $result-> fetch_assoc()){
                                echo "<tr><td>". $row["emri"] ."</td><td>". $row["mbiemri"]  ."</td><td>". $row["profesioni"] ."</td><td>". $row["foto"] ."</td>";
                                ?>
                                <td>
                                    <a href="aboutAdmin.php?edit=<?php echo $row['id']; ?>">Edit</a>
                                    <a href="../Controller/AdminAbout.php?delete=<?php echo $row['id']; ?>">Delete</a>
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
                <form action="../Controller/AdminAbout.php" method="POST" onsubmit="return aboutAdmin()">
                        <div class="login-form">
                            <label for="">Emri</label><br>
                            <input type="text" name="Emri" id="emriAboutInput" value = "<?php echo $emri; ?>">
                            <input type="hidden" name="idHidden" id="" value = "<?php echo $id; ?>">
                        </div>
                        <div class="login-form">
                            <label for="">Mbiemri</label><br>
                            <input type="text" name="mbiemri" id="mbiemriAboutInput" value = "<?php echo $mbiemri; ?>">
                        </div>
                        <div class="login-form">
                            <label for="">Profesioni</label><br>
                            <input type="text" name="profesioni" id="profesioniAboutInput" value ="<?php echo $profesioni; ?>">
                        </div>
                        <div class="login-form">
                            <label for="">Foto</label><br>
                            <input type="text" name="foto" id="fotoAboutInput" value ="<?php echo $foto; ?>">
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
                                        <button name="createWorker">
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