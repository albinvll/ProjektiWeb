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
                        <a href="AllBooks.php"><li>BOOKS</li></a>
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
    <script>
        var queryString = decodeURIComponent(window.location.search);
        queryString = queryString.substring(1);
        var queries = queryString.split("&");
        var titulli =queries;
        if(titulli=='Soccer Poster'){
            document.getElementById('titulli-name').innerHTML='Soccer Poster';
            document.getElementsByTagName('img')[2].src="Images/book2.png";
            document.getElementById('titulli-pershkrimi').innerHTML='Soccer Poster : Maecenas mauris urna, semper nec dignissim vitae, molestie et magna!Duis pulvinar volutpat euismod.'
            document.getElementById('price').innerHTML='$30.39';
        } else if(titulli=='Grateful And Give') {
            document.getElementById('titulli-name').innerHTML='Grateful And Give';
            document.getElementsByTagName('img')[2].src="Images/book1.png";
            document.getElementById('titulli-pershkrimi').innerHTML='Grateful And Give : Maecenas mauris urna, semper nec dignissim vitae, molestie et magna!Duis pulvinar volutpat euismod.'
            document.getElementById('price').innerHTML='$30.39';
        } else if(titulli=='Suspendisse Vel'){
            document.getElementById('titulli-name').innerHTML='Suspendisse Vel';
            document.getElementsByTagName('img')[2].src="Images/book3.png";
            document.getElementById('titulli-pershkrimi').innerHTML='Suspendisse Vel : Maecenas mauris urna, semper nec dignissim vitae, molestie et magna!Duis pulvinar volutpat euismod.'
            document.getElementById('price').innerHTML='$40.39';
        } else if(titulli=='Etiam Auctor'){
            document.getElementById('titulli-name').innerHTML='Etiam Auctor';
            document.getElementsByTagName('img')[2].src="Images/first-offer.png";
            document.getElementById('titulli-pershkrimi').innerHTML='Etiam Auctor : Maecenas mauris urna, semper nec dignissim vitae, molestie et magna!Duis pulvinar volutpat euismod.'
            document.getElementById('price').innerHTML='$36.43';
        } else if(titulli=='The Storyteller'){
            document.getElementById('titulli-name').innerHTML='The Storyteller';
            document.getElementsByTagName('img')[2].src="Images/book4.png";
            document.getElementById('titulli-pershkrimi').innerHTML='The Storyteller : Maecenas mauris urna, semper nec dignissim vitae, molestie et magna!Duis pulvinar volutpat euismod.'
            document.getElementById('price').innerHTML='$25.00';
        }else if(titulli=='The Book Of Love'){
            document.getElementById('titulli-name').innerHTML='The Book Of Love';
            document.getElementsByTagName('img')[2].src="Images/book5.png";
            document.getElementById('titulli-pershkrimi').innerHTML='The Book Of Love : Maecenas mauris urna, semper nec dignissim vitae, molestie et magna!Duis pulvinar volutpat euismod.'
            document.getElementById('price').innerHTML='$42.39';
        } else if(titulli=='Convallis Pharetra'){
            document.getElementById('titulli-name').innerHTML=titulli;
            document.getElementsByTagName('img')[2].src="Images/book10.png";
            document.getElementById('titulli-pershkrimi').innerHTML=titulli+' : Maecenas mauris urna, semper nec dignissim vitae, molestie et magna!Duis pulvinar volutpat euismod.'
            document.getElementById('price').innerHTML='$30.39';
        }else if(titulli=='Eos Lobortis'){
            document.getElementById('titulli-name').innerHTML=titulli;
            document.getElementsByTagName('img')[2].src="Images/book12.png";
            document.getElementById('titulli-pershkrimi').innerHTML=titulli+' : Maecenas mauris urna, semper nec dignissim vitae, molestie et magna!Duis pulvinar volutpat euismod.'
            document.getElementById('price').innerHTML='$30.39';
        }else if(titulli=='The Art City'){
            document.getElementById('titulli-name').innerHTML=titulli;
            document.getElementsByTagName('img')[2].src="Images/book13.png";
            document.getElementById('titulli-pershkrimi').innerHTML=titulli+' : Maecenas mauris urna, semper nec dignissim vitae, molestie et magna!Duis pulvinar volutpat euismod.'
            document.getElementById('price').innerHTML='$30.39';
        }else if(titulli=='History Month'){
            document.getElementById('titulli-name').innerHTML=titulli;
            document.getElementsByTagName('img')[2].src="Images/book13.png";
            document.getElementById('titulli-pershkrimi').innerHTML=titulli+' : Maecenas mauris urna, semper nec dignissim vitae, molestie et magna!Duis pulvinar volutpat euismod.'
            document.getElementById('price').innerHTML='$30.39';
        }
        </script>
</body>
</html>