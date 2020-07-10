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
                    <a href="libriAdmin.php">Libri</a>
                </div>
                <div class="Titujt">
                    <a href="userAdmin.php">User</a>
                </div>
                <div class="Titujt" style="color: red;">
                    Contact
                </div>
                <div class="Titujt">
                    <a href="#example2.php">example2</a>
                </div>
                <div class="Titujt">
                    <a href="#example2.php">example2</a>
                </div>
                <div class="Titujt">
                    <a href="#example3.php">example3</a>
                </div>
            </div>
        </div>
        <div class="right-side">
            <div class="tabela-forma">
                <table id="tableContact" class="tabelaUser">
                    <tr>
                        <th>Email</th>
                        <th>Subject</th>   
                        <th>Sent Date</th>
                        <th colspan="2">Action</th>                 
                    </tr>
                    <?php
                        require "../Model/db_connection.php";
                        global $connection;

                        $sql = "select id, email, subject, content ,sentdate from reports";
                        $result = $connection->query($sql);

                        if ($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                echo "<tr><td>".  $row["email"] ."</td><td>". $row["subject"] ."</td><td>". $row["sentdate"] ."</td>";
                                ?>
                                <td>
                                    <a href="userAdmin.php?edit=<?php echo $row['id']; ?>">Msg</a>
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
                <form action="../Controller/AdminUser.php" method="POST" onsubmit="return contactAdmin()">
                        <div class="login-form">
                            <label for="">Email</label><br>
                            <input type="text" name="email" id="econtactInput">
                            
                        </div>
                        <div class="login-form">
                            <label for="">Subject</label><br>
                            <input type="text" name="subject" id="subjectInput">
                        </div>
                        <div class="login-form">
                            <label for="">Sent Date</label><br>
                            <input type="date" name="sentdate" id="sentdateInput">
                        </div>
                </form>
            </div>            
        </div>
    </div>
    <script src="javascript/admin.js"></script>
</body>
</html>