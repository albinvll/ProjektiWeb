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
                    <a href="userAdmin.php">User</a>
                </div>
                <div class="Titujt">
                    <a href="contactAdmin.php">Contact</a>
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
            <?php
                    require_once "../Controller/AdminLibri.php";
                    // session_start();
                    // if(isset($_SESSION['message'])){
                    //     echo $_SESSION['message'];
                    //     unset($_SESSION['message']);
                    // }
                ?>
                
                <div class="tabela-forma">
                <table id="tabelaLibri" class="tabelaUser">
                    <tr>
                  
                        <th>Title</th>
                        <th>Price</th>
                        <th>Photo</th>
                        <th>Author</th>
                        <th>Date</th>
                        <th colspan="2">Action</th>
                    </tr>   
                    <?php
                        require "../Model/db_connection.php";
                        global $connection;

                        $sql = "select id , title, price, photo, author, date from libri";
                        $result = $connection->query($sql);

                        if ($result->num_rows > 0){
                            while($row = $result-> fetch_assoc()){
                                echo "<tr><td>". $row["title"] ."</td><td>". $row["price"]  ."</td><td>". $row["photo"] ."</td><td>". $row["author"] ."</td><td>". $row["date"] ."</td>";
                                ?>
                                <td>
                                    <a href="libriAdmin.php?edit=<?php echo $row['id']; ?>">Edit</a>
                                    <a href="../Controller/AdminLibri.php?delete=<?php echo $row['id']; ?>">Delete</a>
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
                <form action="../Controller/AdminLibri.php" method="POST" onsubmit="">
                        <div class="login-form">
                            <label for="">Titulli</label><br>
                            <input type="text" name="titulli" id="titulliInput" value = "<?php echo $titulli; ?>">
                            <input type="hidden" name="idHidden" id="" value = "<?php echo $id; ?>">
                        </div>
                        <div class="login-form">
                            <label for="">Cmimi</label><br>
                            <input type="text" name="cmimi" id="cmimiInput" value = "<?php echo $cmimi; ?>">
                        </div>
                        <div class="login-form">
                            <label for="">Photo</label><br>
                            <input type="text" name="photo" id="photoInput" value ="<?php echo $photo; ?>">
                        </div>
                        <div class="login-form">
                            <label for="">Autori</label><br>
                            <input type="text" name="autori" id="autoriInput" value ="<?php echo $autor; ?>">
                        </div>
                        <div class="login-form">
                            <label for="">Data</label><br>
                            <input type="date" name="data" id="dataInput" value = "<?php echo $data; ?>">
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
                                        <button name="createLiber">
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