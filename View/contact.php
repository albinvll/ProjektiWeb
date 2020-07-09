<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <link rel="icon" href="Images/icon.png">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="upper" id="upp">
        <div id="up">
            <div class="logo">
                <img src="Images/bookshop2.png" alt="">
            </div>
            
            <div class="cart">
                <div class="search">
                        <div class="all">
                            <div class="all-cat">
                                ALL CATEGORIES
                            </div>
                            <div class="search-input">
                                <input type="text" placeholder="Enter search your key">
                            </div>
                            <div class="search-icon">
                                <button type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                </div>
            </div>
            <div class="categories">
                <div class="categories-content">
                    <p>
                        <i class="fa fa-shopping-cart"></i> My cart: 0 item(s)
                    </p>
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
                    </ul>
                </div>
                <div class="header-phone-div">
                    <div class="header-phone-div-content">
                        <div>
                            <img src="Images/phone.png" alt="">
                        </div>
                        <div class="number">
                            +383 44 307 373
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main">
        <div class="foto">
            <img src="Images/collection.png" alt="">
        </div>
        <div class="title">
            Contact Us
        </div>
        <div id="content" class="page-content card card-block">
            <div class="leftside">
                <h1>CONTACT US</h1> 
                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
                <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum formas human.</p>
                <div class="home-content">
                    <div class="icon">
                        <i class="fa fa-home"></i>
                    </div>
                    <div class="paragraf">
                        <p>Bookshop|Home1</p>
                        <p>United States</p>
                    </div>    
                </div> 
                <div class="envelope-content">
                    <div class="icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="paragraf">
                        <p>asdasd@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="rightside">
                <h1>SEND US A MESSAGE</h1>
                <form action="../Controller/contact_report.php" method="POST">
                    <div class="rightside-content">
                        <input class="form-control" id="inputEmail" name="inputEmail" type="email" value placeholder="Your Email">
                    </div>
                    <input class="subject" name="inputSubject" type="subject" value placeholder="Subject">
                    
                    <textarea class="message-content" name="inputMessage" placeholder="Your Message" rows="5" style="margin-top: 0px; margin-bottom: 0px; height: 131px;"></textarea>

                    <button type="submit" name="submitContact">CONTACT US</button>
                </form>
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
        <div class="footer-content">
            <h3>FOLLOW INSTAGRAM</h3>
            <div class="insta-pic">
                <div class="row">
                    <img src="Images/guy1.jpg" alt="">
                    <img src="Images/girl1.jpg" alt="">
                </div>
                <div class="row">
                    <img src="Images/girl2.jpg" alt="">
                    <img src="Images/guy2.jpg" alt="">
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright">
        &copy; 2020 All Rights Reserved <br>
        <a href="https://github.com/dionk6/Projekti.git" target="_blank">REPOSITORY: Dion Kuka , Albin Vllahiu , Alban Salihu</a>
    </div>
    <script src="javascript/home.js"></script>
    <script src="javascript/contact.js"></script>
</body>
</html>