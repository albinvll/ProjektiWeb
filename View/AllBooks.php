<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="icon" href="Images/icon.png">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php 
        require('../Model/db_connection.php');
        global $connection;
    ?>
    <div class="upper" id="upp">
        <div id="up">
            <div class="logo">
                <img src="Images/bookshop2.png" alt="">
            </div>
            
            <div class="cart">
                <div class="search">
                        <div class="all">
                            <div class="all-cat">
                                CATEGORIES
                            </div>
                            <div class="search-input">
                                <input  type="text" placeholder="Search for your book" id="searchBook">
                            </div>
                            <div class="search-icon">
                                <button id="searchButton" onclick="search()" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                </div>
            </div>
            
        </div>
        <div class="header-size">
            <div class="header">
                <div class="header-list">
                    <ul>
                        <a href="home.php" style="color: white;"><li>HOME</li></a>
                        <a href="about.php"><li>ABOUT US</li></a>
                        <a href="contact.php"><li>CONTACT US</li></a>
                        <a href="AllBooks.php" style="color: #e94c37;"><li>BOOKS</li></a>
                        <?php
                            require("../Model/userRepo.php");
                            session_start();

                            if(isset($_SESSION['email'])){
                                $email = $_SESSION['email'];
                                $roli = isAdmin($email);
                                if($roli == 1){
                                    ?>
                                        <a href="libriAdmin.php"><li>DASHBOARD</li></a>
                                    <?php
                                }
                            }
                            
                        ?>
                    </ul>
                </div>
                <div class="header-phone-div">
                    <div class="header-phone-div-content">
                        <div>
                        <img src="Images/profile.png" style="width:40px; height:40px;" alt="">
                        </div>
                        <div class="number">
                            <?php
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
    </div>
    <div class="main">
        <div class="main-content">
            <?php
                $sql = "SELECT * FROM `libri`";
                $result = mysqli_query($connection,$sql) or die(mysqli_error($connection));
            ?>
            <div class="right-content" style="width: 100%;">
                <div class="title" style="margin-top: 0px;">
                    <div>
                        ALL BOOKS
                    </div>
                </div>
                
                <div class="three-books">
                    <?php
                        $numri = 0;
                        while($row = $result->fetch_array()){
                            ?>
                                <div class="book">
                                    <img src="Images/<?php echo $row['photo']; ?>" alt="Cannot find photo from Database">
                                    <div class="name-price">
                                        <div class="name-div">
                                            <div class="name">
                                                <?php echo $row['title']; ?>  
                                            </div>
                                            <div class="rating">
                                                <i>Autori:</i>   
                                                <?php echo $row['author']; ?>
                                            </div>
                                        </div>
                                        <div class="name-div">
                                            <p>
                                                <a href="book.php?book=<?php echo $row['id']; ?>">Buy now</a>
                                            </p>
                                            <p class="price">
                                                $<?php echo $row['price']; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php
                        }
                    ?>
                </div>
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