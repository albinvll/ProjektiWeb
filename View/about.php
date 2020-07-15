<!DOCTYPE html>
<html>
<head>
    <title>About Us</title>
    <link rel="icon" href="Images/icon.png">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    </div>

    <div class="main">
        <h2 style="text-align: center; margin-bottom:30px;">ABOUT US</h2>

        <div class="ourmission">
            <img src="Images/funnylaptop.jpg" />
            <div class="ourmissiontext">
                <h1>OUR MISSION</h1>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                   Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incid
                </p>
            </div>
        </div>
        <div class="meetourteam">
            <h1 style="text-align: center;">MEET OUR TEAM</h1>
            <p style="text-align:center;">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
        </div>
        <div class="people">
            <?php
                require('../Model/db_connection.php');
                global $connection;

                $query = "SELECT * FROM about";
                $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
                while($row = $result->fetch_array()){
                    ?>
                        <div class="guy1">
                            <img src="Images/<?php echo $row['foto']; ?>" />
                            <h2> <?php echo $row['emri']." ".$row['mbiemri']; ?> </h2>
                            <p> <?php echo $row['profesioni']; ?> </p>
                        </div>
                    <?php
                }
            ?>
            
        </div>
        <div class="ourservice">
            <div class="ourservicetext">
            <h1> OUR SERVICE</h1>
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incid
            </p>
            </div>
            <img src="Images/funnyphonecall.jpg" />
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