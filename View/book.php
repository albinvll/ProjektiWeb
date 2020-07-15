<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product</title>
    <link rel="icon" href="Images/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/product.css">
</head>
<body>
    <div class="upper" id="upp">
        <div id="up">
            <div class="logo">
                <img src="Images/bookshop2.png" alt="">
            </div>
            
            
        </div>
        <div class="header-size">
            <div class="header">
                <div class="header-list">
                    <ul>
                        <a href="home.php"><li>HOME</li></a>
                        <a href="about.php"><li>ABOUT US</li></a>
                        <a href="contact.php"><li>CONTACT US</li></a>
                        <a href="AllBooks.php"><li>BOOKS</li></a>
                    </ul>
                </div>
                <div class="header-phone-div">
                    <div class="header-phone-div-content">
                        <div>
                        <img src="Images/profile.png" style="width:40px; height:40px;" alt="">
                        </div>
                        <div class="number">
                            <?php
                                session_start();
                                if(isset($_SESSION['login'])){
                                    echo $_SESSION['name']." ".$_SESSION['surname'];
                            ?>
                                <div>
                                    <div class="dropdown-content">
                                        <a href="changepassword.php">Account Managment</a>
                                        <a href="../Controller/logout.php">Log out</a>
                                    </div>
                                </div>
                            <?php
                                }else{
                                    echo "<a href=\"index.php\">Not logged in</a>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main">
        <?php
            require('../Model/db_connection.php');
            global $connection;
            $id = $_GET['book'];
            $sql = "SELECT * FROM `libri` WHERE id=$id";
            $result = mysqli_query($connection,$sql) or die(mysqli_error($connection));
            $row = $result->fetch_array();
        ?>
        <div class="main-content">
            <div id="foto">
                <img src="Images/<?php echo $row['photo']; ?>" alt="Cannot find photo from Database">
            </div>
            
            <div id="titulli">
                <div id="titulli-name">
                    <?php echo $row['title']; ?> 
                </div>
                <div id="titulli-pershkrimi">
                    <i>Autori:</i>   
                    <?php echo $row['author']; ?>
                </div>
                <div id="titulli-pershkrimi">
                    <?php echo $row['date']; ?>
                </div>
                <div id="price">
                    $<?php echo $row['price']; ?>
                </div>
                <button>
                    Buy now
                </button>
            </div>
        </div>
    </div>
      
    <footer>
        <div class="footer-content">
            <p><img src="Images/footerLogo.png" alt=""></p>
            <div class="location">
                <div><i class="fa fa-map-marker"></i></div>
                <div>
                    123 Main Street, Anytown,CA 12345 USA
                </div>
            </div>
            <div class="location">
                <div><i class="fa fa-phone"></i></div>
                <div>
                    +383 44 307 373
                </div>
            </div>
            <div class="location">
                <div><i class="fa fa-envelope"></i></div>
                <div>
                    filanfisteku@gmail.com
                </div>
            </div>
        </div>
        <div class="footer-content">
            <h3>SHOPPING GUIDE</h3>
            <div class="list">
                <p>Delivery</p>
                <p>Legal Notice</p>
                <p>About Us</p>
                <p>Secure Payment</p>
                <p>New Products</p>
                <p>Sitemap</p>
            </div>
        </div>
        <div class="footer-content">
            <h3>YOUR INFORMATION</h3>
            <div class="list">
                <p>Personal info</p>
                <p>Orders</p>
                <p>Credit Slips</p>
                <p>Addresses</p>
                <p>My Wishlists</p>
                <p>Sitemap</p>
            </div>
        </div>
        
    </footer>
    <div class="copyright">
        &copy; 2020 All Rights Reserved <br>
        <a href="https://github.com/dionk6/Projekti.git" target="_blank">REPOSITORY FRONTEND: Dion Kuka , Albin Vllahiu , Alban Salihu</a>
        </br>
        <a href="https://github.com/albinvll/ProjektiWeb.git" target="_blank">REPOSITORY BACKEND: Dion Kuka , Albin Vllahiu , Alban Salihu</a>
    </div>
    <script src="javascript/home.js"></script>
    
</body>
</html>