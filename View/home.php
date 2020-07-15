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
        <div class="sliderFull">
            <div class="slider-div">
                <div class="slide show-slide">
                    <img src="Images/photo1-home.jpg" alt=""> 
                </div>
                <div class="slide remove-slide">
                    <img src="Images/photo2-home.jpg" alt="">
                </div>
                <div class="slide remove-slide">
                    <img src="Images/photo3-home.jpg" alt="">
                </div>
            </div>
            <div class="slidershow-text">
                <h1>EACH DAY A BOOK</h1>
                <p>
                    Lorem Ipsum is simply dummy text of the printing <br/>
                    and typesetting industry. 
                </p>
                <div class="learn">
                    <a href="about.html">Learn more about us</a>
                </div>
            </div>
            <div class="slidershow-content">
                <div class="left-content-slidershow">
                    <div class="button-slideshow left" onclick="left()">
                        <img src="Images/left.png" alt="">
                    </div>
                </div>
                <div class="right-content-slidershow">
                    <div class="button-slideshow right" onclick="right()">
                        <img src="Images/right.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="main-content">
            <div class="left-content">
                <div class="title">
                    HOT DEALS
                </div>
                <div class="first-offer">
                    <?php
                        $sql = "SELECT * FROM `libri` WHERE price = (SELECT MIN(price) FROM `libri`)";
                        $result = mysqli_query($connection,$sql) or die(mysqli_error($connection));
                        $libri = $result->fetch_array();

                    ?>
                    <div class="offer-pic">
                        <img src="Images/<?php echo $libri['photo']; ?>" alt="Cannot find photo from Database">
                    </div>
                    <div class="name-price">
                        <div class="name-div">
                            <div class="name">
                                <?php echo $libri['title']; ?>
                            </div>
                            <div class="rating">
                                <i>Autori:</i>
                                <?php echo $libri['author']; ?>
                            </div>
                        </div>
                        <div class="name-div">
                            <p>
                                <s>$40.48</s>
                            </p>
                            <p class="price">
                                $<?php echo $libri['price']; ?>
                            </p>
                        </div>
                        <div class="name-div">
                            <div class="offer-time">
                                <i class="fa fa-clock-o"></i> 1969 Days
                            </div>
                        </div>
                    </div>
                </div>
                <div class="title">
                    NEW ARRIVALS
                </div>
                <div class="arrival-div">
                    <?php 
                        $sql = "SELECT * FROM `libri` ORDER BY id DESC LIMIT 4";
                        $result = mysqli_query($connection,$sql) or die(mysqli_error($connection));
                        while($librat = $result->fetch_array()){
                            ?>
                                <div class="arrival-book">
                                    <div class="arrival-img">
                                        <img src="Images/<?php echo $librat['photo']; ?>" alt="Cannot find photo from Database">
                                    </div>  
                                    <div class="arrival-book-content">
                                        <div>
                                            <?php echo $librat['title']; ?>
                                        </div>
                                        <div>
                                            <i>Autori:</i>
                                            <?php echo $librat['author']; ?>
                                        </div>
                                        <div class="price">
                                            $<?php echo $librat['price']; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php
                        }
                    ?>
                </div>
                <div class="title">
                    TESTIMONIALS
                </div>
                <div class="personi">
                    <div class="personi-foto">
                        <img src="Images/personi.png" alt="">
                    </div>
                    <div class="personi-name">
                        JANE DOE <br>
                        <span>Web Designer</span>
                    </div>
                    <div class="personi-content">
                        <span>&#8220;</span> <br>
                        Lorem Ipsum is simply dummy text of the printing 
                        and typesetting industry. 
                        Lorem Ipsum has been the industry's 
                        standard dummy text ever since the 1500s, 
                        when an unknown printer took Lorem Ipsum is simply...
                        <br><span>&#8221;</span>
                    </div>
                </div>
            </div>
    <?php
        $sql = "SELECT * FROM `libri` LIMIT 6";
        $result = mysqli_query($connection,$sql) or die(mysqli_error($connection));
    ?>
            <div class="right-content">
                <div class="title">
                    <div>
                        BEST SELLER
                    </div>
                    <div>
                        <a href="AllBooks.php">SEE MORE</a>
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
                
                <div class="new-arrival">
                    <img src="Images/arrival.png" alt="">
                    <div>
                        <h2>
                            <span>NEW</span><br>ARRIVALS
                        </h2>
                        <p>
                            Lorem Ipsum is simply <br>dummy text
                        </p>
                    </div>
                </div>
                <div class="title">
                    <div>
                    FEATURED PRODUCTS
                    </div>
                    <div>
                        <a href="AllBooks.php">SEE MORE</a>
                    </div>
                </div>
                <div class="four-books">
                    <?php
                        $sql = "SELECT * FROM `libri` ORDER BY `date` DESC";
                        $res = mysqli_query($connection,$sql) or die(mysqli_error($connection));
                        $count = 0;
                        while(($books = $res->fetch_array()) && ($count < 8)){
                            ?>
                                <div class="book">
                                    <img src="Images/<?php echo $books['photo']; ?>" alt="Cannot find photo from Database">
                                    <div class="name-price">
                                        <div class="name-div">
                                            <div class="name">
                                                <?php echo $books['title']; ?> 
                                            </div>
                                            <div class="rating">
                                                <!-- <i>Autori:</i>    -->
                                                <?php echo $books['author']; ?>
                                            </div>
                                        </div>
                                        <div class="name-div">
                                            <p>
                                                <a href="book.php?book=<?php echo $books['id']; ?>">Buy now</a>
                                            </p>
                                            <p class="price">
                                                $<?php echo $books['price']; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            $count++;
                        }
                    ?>
                   
                </div>
            </div>
        </div>
        <div class="photo-album">
            <div class="foto-1">
                <img src="Images/foto1.png" alt="">
            </div>
            <div class="foto-2">
                <div class="foto1">
                    <img src="Images/foto2.png" alt="">
                </div>
                <div class="foto2">
                    <img src="Images/foto3.png" alt="">
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
        <a href="https://github.com/dionk6/Projekti.git" target="_blank">REPOSITORY: Dion Kuka , Albin Vllahiu , Alban Salihu</a>
    </div>
    <script src="javascript/home.js"></script>
</body>
</html>