<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="icon" href="Images/icon.png">
    <link rel="stylesheet" href="css/home.css">
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
                        <a href="home.html"><li>HOME</li></a>
                        <a href="about.html"><li>ABOUT US</li></a>
                        <a href="contact.html"><li>CONTACT US</li></a>
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
                    <div class="offer-pic">
                        <img src="Images/first-offer.png" alt="">
                    </div>
                    <div class="name-price">
                        <div class="name-div">
                            <div class="name">
                                Etiam Auctor
                            </div>
                            <div class="rating">
                                <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                            </div>
                        </div>
                        <div class="name-div">
                            <p>
                                <s>$40.48</s>
                            </p>
                            <p class="price">
                                $36.43
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
                    <div class="arrival-book">
                        <div class="arrival-img">
                            <img src="Images/book6.png" alt="">
                        </div>
                        <div class="arrival-book-content">
                            <div>Convallis Pharetra</div>
                            <div>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                            </div>
                            <div class="price">
                                $25.39
                            </div>
                        </div>
                    </div>
                    <div class="arrival-book">
                        <div class="arrival-img">
                            <img src="Images/book7.png" alt="">
                        </div>
                        <div class="arrival-book-content">
                            <div>History Month</div>
                            <div>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                            </div>
                            <div class="price">
                                $30.39
                            </div>
                        </div>
                    </div>
                    <div class="arrival-book">
                        <div class="arrival-img">
                            <img src="Images/book8.png" alt="">
                        </div>
                        <div class="arrival-book-content">
                            <div>The Book of Love</div>
                            <div>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                            </div>
                            <div class="price">
                                $42.39
                            </div>
                        </div>
                    </div>
                    <div class="arrival-book">
                        <div class="arrival-img">
                            <img src="Images/book9.png" alt="">
                        </div>
                        <div class="arrival-book-content">
                            <div>Suspendisse Vel</div>
                            <div>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                            </div>
                            <div class="price">
                                $40.39
                            </div>
                        </div>
                    </div>
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
            <div class="right-content">
                <div class="title">
                    BEST SELLER
                </div>
                <div class="three-books">
                    <div class="book">
                        <img src="Images/book1.png" alt="">
                        <div class="name-price">
                            <div class="name-div">
                                <div class="name">
                                    Grateful And Give
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                </div>
                            </div>
                            <div class="name-div">
                                <p>
                                    <button onclick="Buy('Grateful And Give')">
                                        Buy now
                                    </button>
                                </p>
                                <p class="price">
                                    $30.39
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="book">
                        <img src="Images/book2.png" alt="">
                        <div class="name-price">
                            <div class="name-div">
                                <div class="name">
                                    Soccer Poster
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                </div>
                            </div>
                            <div class="name-div">
                                <p>
                                    <button onclick="Buy('Soccer Poster')">
                                        Buy now
                                    </button>
                                </p>
                                <p class="price">
                                    $30.39
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="book">
                        <img src="Images/book3.png" alt="">
                        <div class="name-price">
                            <div class="name-div">
                                <div class="name">
                                    Suspendisse Vel
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                </div>
                            </div>
                            <div class="name-div">
                                <p>
                                    <button onclick="Buy('Suspendisse Vel')">
                                        Buy now
                                    </button>
                                </p>
                                <p class="price">
                                    $40.39
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="three-books">
                    <div class="book">
                        <img src="Images/first-offer.png" alt="">
                        <div class="name-price">
                            <div class="name-div">
                                <div class="name">
                                    Etiam Auctor
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                </div>
                            </div>
                            <div class="name-div">
                                <p>
                                    <button onclick="Buy('Etiam Auctor')">
                                        Buy now
                                    </button>
                                    <s> $40.48</s>
                                </p>
                                <p class="price">
                                    $36.43
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="book">
                        <img src="Images/book4.png" alt="">
                        <div class="name-price">
                            <div class="name-div">
                                <div class="name">
                                    The Storyteller
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                </div>
                            </div>
                            <div class="name-div">
                                <p>
                                    <button onclick="Buy('The Storyteller')">
                                        Buy now
                                    </button>
                                    <s> $40.00</s>
                                </p>
                                <p class="price">
                                    $25.00
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="book">
                        <img src="Images/book5.png" alt="">
                        <div class="name-price">
                            <div class="name-div">
                                <div class="name">
                                    The Book Of Love
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                </div>
                            </div>
                            <div class="name-div">
                                <p>
                                    <button onclick="Buy('The Book Of Love')">
                                        Buy now
                                    </button>
                                </p>
                                <p class="price">
                                    $42.39
                                </p>
                            </div>
                        </div>
                    </div>
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
                    FEATURED PRODUCTS
                </div>
                <div class="four-books">
                    <div class="book">
                        <img src="Images/book10.png" alt="">
                        <div class="name-price">
                            <div class="name-div">
                                <div class="name">
                                    Convallis Pharetra
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                </div>
                            </div>
                            <div class="name-div">
                                <p>
                                    <button onclick="Buy('Convallis Pharetra')">
                                        Buy now
                                    </button> <s> $30.39</s>
                                </p>
                                <p class="price">
                                    $25.39
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="book">
                        <img src="Images/book11.png" alt="">
                        <div class="name-price">
                            <div class="name-div">
                                <div class="name">
                                    The Book Of Love
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                </div>
                            </div>
                            <div class="name-div">
                                <p>
                                    <button onclick="Buy('The Book Of Love')">
                                        Buy now
                                    </button><s></s>
                                </p>
                                <p class="price">
                                    $42.39
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="book">
                        <img src="Images/book12.png" alt="">
                        <div class="name-price">
                            <div class="name-div">
                                <div class="name">
                                    Eos Lobortis
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                </div>
                            </div>
                            <div class="name-div">
                                <p>
                                    <button onclick="Buy('Eos Lobortis')">
                                        Buy now
                                    </button> <s> 30.39</s>
                                </p>
                                <p class="price">
                                    $27.35
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="book">
                        <img src="Images/book13.png" alt="">
                        <div class="name-price">
                            <div class="name-div">
                                <div class="name">
                                    The Art City
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                </div>
                            </div>
                            <div class="name-div">
                                <p>
                                    <button onclick="Buy('The Art City')">
                                        Buy now
                                    </button> <s></s>
                                </p>
                                <p class="price">
                                    $30.39
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="four-books">
                    <div class="book">
                        <img src="Images/book14.png" alt="">
                        <div class="name-price">
                            <div class="name-div">
                                <div class="name">
                                    History Month
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                </div>
                            </div>
                            <div class="name-div">
                                <p>
                                    <button onclick="Buy('History Month')">
                                        Buy now
                                    </button> <s></s>
                                </p>
                                <p class="price">
                                    $30.39
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="book">
                        <img src="Images/book3.png" alt="">
                        <div class="name-price">
                            <div class="name-div">
                                <div class="name">
                                    Suspendisse Vel
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                </div>
                            </div>
                            <div class="name-div">
                                <p>
                                    <button onclick="Buy('Suspendisse Vel')">
                                        Buy now
                                    </button> <s></s>
                                </p>
                                <p class="price">
                                    $40.39
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="book">
                        <img src="Images/book4.png" alt="">
                        <div class="name-price">
                            <div class="name-div">
                                <div class="name">
                                    The Storyteller
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                </div>
                            </div>
                            <div class="name-div">
                                <p>
                                    <button onclick="Buy('The Storyteller')">
                                        Buy now
                                    </button> <s>40.00</s>
                                </p>
                                <p class="price">
                                    $25.00
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="book">
                        <img src="Images/book10.png" alt="">
                        <div class="name-price">
                            <div class="name-div">
                                <div class="name">
                                    Convallis Pharetra
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                </div>
                            </div>
                            <div class="name-div">
                                <p>
                                    <button onclick="Buy('Convallis Pharetra')">
                                        Buy now
                                    </button> <s>$41.25</s>
                                </p>
                                <p class="price">
                                    $33.00
                                </p>
                            </div>
                        </div>
                    </div>
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
        <div class="footer-content">
            <h3>FOLLOW INSTAGRAM</h3>
            <div class="insta-pic">
                <div class="row">
                    <img src="Images/guy1.jpg" alt="">
                    <img src="Images/girl2.jpg" alt="">
                </div>
                <div class="row">
                    <img src="Images/girl1.jpg" alt="">
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
</body>
</html>