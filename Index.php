<?php
    require "./db/config.php";
    if(!isset($_SESSION)) { 
        session_start();
    }
    if(isset($_SESSION['sessionid'])){
        $query = $conn->prepare( "SELECT FullName FROM users WHERE SessionID=?" );
        $query->execute([$_SESSION['sessionid']]);
        $row = $query->fetch(PDO::FETCH_OBJ);
        $fullname = $row->FullName;
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agriculture Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="script.js">
    <!--boxicons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  </head>
  <body>
    <header>
      <a href="" class="logo">AgriQuick <span>D9.</span>
      </a>
      <div class="bx bx-menu" id="menu-icon"></div>
      <ul class="navbar">
        <li>
          <a href="#">Home</a>
        </li>
        <li>
          <a href="products.html">Products</a>
        </li>
        <li>
          <a href="#about">About</a>
        </li>
        <?php if(!isset($_SESSION['sessionid'])) { ?>
            <li>
                <a href="./auth/login.php"><button class="logoutsys">Login</button></a>
            </li>
        <?php } ?>
        <?php if(isset($_SESSION['sessionid'])) { ?>
            <li>
                <a href="./auth/logout.php"><button class="logoutsys">Logout</button></a>
            </li>
        <?php } ?>
      </ul>
    </header>
    <!--head-->
    <section class="home" id="home">
      <div class="home-text"> <?php if(isset($_SESSION['sessionid']) || isset($_GET['sessionid'])) { ?> 
        <h2><span>Welcome </span>Back <?php echo $fullname ?></h2>
            <?php } ?> <h1>
                <span>Improving </span>Our Farmers <br> Farm productivity is our <span>Main Goal. </span>
                    <p class="vision">Our vision is to give our farmers quality goods while at the same </br>time Educating them on better farming techniques. </p>
                    <a href="shop" class="btn"> Shop Now</a></h1>
      </div>
    </section>
    <!--shop-->
    <section class="shop" id="shop">
        <div class="shopwrapper">
            <div class="box">
                <div class="box-img">
                    <p>
                        <img src="./images/Gs/184b7cb84d7b456c96a0bdfbbeaa5f14.jpg" alt="">
                    <p> We offer the best services at affordable prices.</p>
                </div>
                <div class="title-price">
                    <h3>Vegetable Farming</h3>
                    <div class="stars">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star-half'></i>
                    </div>
                </div>
                <span>Ksh 420</span>
                <spaan>Farm Activities</span>
                <i class='bx bx-cart'></i>
            </div>
            <div class="box">
                <div class="box-img">
                    <p>
                        <img src="./images/Gs/8-Seeders-Definition.jpg" alt="">
                    <p> Farm seeders.</p>
                </div>
                <div class="title-price">
                    <h3>Vegetable Farming</h3>
                    <div class="stars">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star-half'></i>
                    </div>
                </div>
                <span>Farm preparation Tools</span>
                <i class='bx bx-cart'></i>
            </div>
            <div class="box">
                <div class="box-img">
                    <p>
                        <img src="./images/Gs/7-Types-of-Harrows.jpg" alt="">
                    <p> Types of Harrows.</p>
                </div>
                <div class="title-price">
                    <h3>Vegetable Farming</h3>
                    <div class="stars">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star-half'></i>
                    </div>
                </div>
                <span>Livestock</span>
                <i class='bx bx-cart'></i>
            </div>
            <div class="box">
                <div class="box-img">
                    <p>
                        <img src="./images/Gs/6-About-Tractor-Attachments.jpg" alt="">
                    <p> Tractor trailers.</p>
                </div>
                <div class="title-price">
                    <h3>Vegetable Farming</h3>
                    <div class="stars">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star-half'></i>
                    </div>
                </div>
                <span>Livestock</span>
                <i class='bx bx-cart'></i>
            </div>
            <div class="box">
                <div class="box-img">
                    <p>
                        <img src="./images/Gs/5-All-Terain-Vehicles.jpg" alt="">
                    <p> All terrain Vehicles.</p>
                </div>
                <div class="title-price">
                    <h3>Vegetable Farming</h3>
                    <div class="stars">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star-half'></i>
                    </div>
                </div>
                <span>Livestock</span>
                <i class='bx bx-cart'></i>
            </div>
        </div>
    </section>
    <!--About-->
    <section class="about" id="about">
      <div class="about-img">
        <img src="./images/Gs/3-Tractors-Resized.jpg" alt="">
      </div>
      <div class="about-text">
        <span>About Us</span>
        <h2>Agriculture for economic growth: 
          <br>Invest in your Farms</h2>
        <p></p>
        <p>For more Send Us An Email in the section below .Thanks</p>
        <a href="#shop" class="btn">Learn more.</a>
      </div>
    </section>
    <!--brands-->
    <section class="brands" id="brands">
      <div class="heading">
        <span>Brands</span>
        <h2>Our partners near you</h2>
      </div>
      <div class="brands-container">
        <img src="./images/Gs/download.png" alt="">
        <img src="./images/Gs/download (1).png" alt="">
        <img src="./images/Gs/download (2).jpg" alt="">
        <img src="./images/Gs/download (3).jpg" alt="">
      </div>
    </section>
    <section class="newsletter" id="contact">
      <h2>Subscribe to newsletter</h2>
      <div class="news-box">
        <input type="text" placeholder="Enter personal Email..." required>
        <a href="mailto:admin@agriquick.co.ke" class="btn">Subscribe</a>
      </div>
    </section>
    <section class="More-Links">
      <div class="ex-box">
        <h3>Services</h3>
        <a href="#">
          <i class="fab fa-Training"></i>Training </a>
        <a href="#">
          <i class="fab fa-Loans"></i>Loans </a>
        <a href="#">
          <i class="fab fa-Educating"></i>Educating </a>
        <a href="#">
          <i class="fab fa-Awareness"></i>Awareness </a>
        <a href="#">
          <i class="fab fa-Marketing & pricing"></i>Marketing & pricing </a>
      </div>
      <div class="ex-box">
        <h3>products</h3>
        <a href="#">
          <i class="fab fa-Seeds"></i>Seeds </a>
        <a href="#">
          <i class="fab fa-fertilizer"></i>fertilizer </a>
        <a href="#">
          <i class="fab fa-Pesticides"></i>Pesticides </a>
        <a href="#">
          <i class="fab fa-Herbicides"></i>Herbicides </a>
        <a href="#">
          <i class="fab fa-Training"></i>Training </a>
      </div>
      <div class="ex-box">
        <h3>Contacts</h3>
        <a href="#">
          <i class="fab fa-Nairobi,kenya 0100"></i>Nairobi,kenya 0100 </a>
        <a href="#">
          <i class="fab fa-+2547888887"></i>+254788888766 </a>
        <i class="">
          
           
          <html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9696700520011456" crossorigin="anonymous"></script>
</head>

<body>
    <h1>Email Address : Send Mail Mate</h1>
    <br>
    <p> <a href="mailto:admin@agriquick.co.ke">admin@agriquick.co.ke</a></p>
</body>


</i>
      </div>
    </section>
    <div class="copyright">
      <p>&#169; StrangerLife All Right Reserved.</p>
    </div>
    <!--linking with js-->
    <script src="script.js"></script>
    <!--ionicons-->
    <a class="social-icons" href="https://twitter.com/">
      <ion-icon name="logo-twitter"></ion-icon>
    </a>
    <a class="social-icons" href="https://google.com/">
      <ion-icon name="logo-google"></ion-icon>
    </a>
    <a class="social-icons" href="https://facebook.com/">
      <ion-icon name="logo-facebook"></ion-icon>
    </a>
    <a class="social-icons" href="https://instagram.com/">
      <ion-icon name="logo-instagram"></ion-icon>
    </a>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    scroll-behavior: smooth;
    scroll-padding-top: 2rem;
    list-style: none;
    text-decoration: none;
    font-family: 'Poppins', sans-serif;
}

:root {
    --text-color: #000000;
    --main-color: #83b735;
}

section {
    padding: 50px 10px;
}

header {
    position: fixed;
    width: 100%;
    top: 0;
    right: 0;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 18px 100px;
    background: #edecea;
}

.logo {
    font-size: 1.2rem;
    font-weight: 600;
    color: var(--text-color);
    color: thistle;
    text-transform: uppercase;
    display: flex;
    justify-content: center;
    align-content: center;
    animation-duration: 10s;
    animation-timing-function: linear;
    animation-name: colorchange;
    animation-delay: 0.9s;
    animation-iteration-count: infinite;
    filter: constrast(500%);
}

@keyframes colorchange {
    0% {
        color: aqua;
    }
    25% {
        color: whitesmoke;
    }
    50% {
        color: red;
    }
    75% {
        color: blue;
    }
    100% {
        color: pink;
    }
}

.logo span {
    color: var(--main-color);
}

i {
    padding-right: .3rem;
}

.navbar {
    position: relative;
    display: flex;
}

.navbar a {
    font-size: 1rem;
    padding: 10px 20px;
    font-weight: 500;
    color: var(--text-color);
}

.navbar a :hover {
    color: var(--main-color);
}

#menu-icon {
    font-size: 2rem;
    cursor: pointer;
    display: none;
}

.home {
    width: 100%;
    min-height: 100vh;
    background-image: url(images/agriculture.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: right;
    background-attachment: fixed;
    display: flex;
    align-items: center;
}

.home-text h1 {
    font-size: 2.7rem;
}

.home-text p {
    font-size: 0.938rem;
    margin: 0.4rem 0 1.8rem;
}

.home-text span {
    color: brown;
}

.btn {
    padding: 10px 14px;
    background: var(--main-color);
    color: white;
    border-radius: 0.3rem;
    font-size: 14px;
}

.btn :hover {
    background: #8fc53d;
}

.title-price {
    display: flex;
    justify-content: space-between;
    padding: 12px;
}

.title-price h3 {
    font-size: 1rem;
    font-weight: 600;
}

.title-price p {
    align-items: right;
    flex-direction: column;
}

.title-price,
.star {
    margin-right: 70%;
}

.shop-container,
.new-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, auto));
    gap: 1rem;
    margin-top: 2rem;
}

.shopwrapper {
    display: flex;
    justify-content: space-around;
    gap: 2rem;
    flex-wrap: wrap;
}

.box {
    position: relative;
    box-shadow: 1px 4px 4px rgba(0, 0, 0, 0.1);
    border-radius: 44px 4px 4px 4px;
    width: min-content;
}

.box .box-img img {
    width: 500px;
    object-fit: cover;
    flex-wrap: wrap;
    object-position: center;
    border-radius: 20px;
}

.box .box-img img :hover {
    transform: scale(1, 1);
    transition: 0.5s;
}

.box span {
    font-size: 1.1rem;
    font-weight: 500;
    padding-left: 12px;
    color: var(--main-color);
}

.title-price {
    display: flex;
    width: 100%;
    justify-content: space-between;
}

.stars {
    display: flex;
}

.stars.bx {
    color: var(--main-color);
}

.box .bx-cart {
    position: absolute;
    bottom: 0;
    right: 0;
    padding: 7px;
    font-size: 20px;
    color: white;
    border-radius: 4px 0 4px 0;
    background: var(--main-color);
}

.box .bx-cart :hover {
    background: #8fc53d;
}

.new-container .box {
    border-radius: 4px;
}

.new-container .box .box-img {
    border-radius: 4px;
}

.vision {
    font-size: 20px;
    color: antiquewhite;
}

.about {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1rem;
}

.about-img img {
    width: 70%;
    border-radius: 10px;
    object-fit: contain;
    margin-left: 90px;
}

.about-text span {
    color: var(--main-color);
    font-size: 14px;
    font-weight: 500;
    text-transform: uppercase;
    color: var(--main-color);
    align-items: center;
}

.about-text p {
    font-size: 0.1;
    margin: 0.5rem 0 1.4rem;
}

.brands-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(100px, auto));
    align-items: center;
    justify-content: space-between;
    gap: 1rem;
    margin-top: 2rem;
}

.brands-container img {
    width: 100px;
    filter: grayscale(1);
}

.brands-container img :hover {
    width: 100px;
    filter: grayscale(0);
}

.newsletter {
    display: flex;
    flex-direction: column;
    align-items: center;
    background-image: url(images/Crops.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}

.newsletter h2 {
    color: blue;
}

.news-box {
    display: flex;
    align-items: center;
    margin-top: 2rem;
}

.news-box input {
    width: 260px;
    height: 44px;
    border: none;
    outline: none;
    background: white;
    padding: 10px;
}

.news-box .btn {
    height: 44px;
    padding: 11px;
    border-radius: 0;
    font-weight: 500;
    text-transform: uppercase;
}

.footer {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, auto));
    gap: 1rem;
}

.footer-box h2 {
    font-size: 1.2rem;
    font-weight: 600;
    margin-bottom: 10px;
}

.footer-box span {
    color: var(--main-color);
}

.footer-box p {
    font-size: 0.1rem;
    margin-bottom: 10px;
}

.social {
    display: flex;
    align-items: center;
}

.social a {
    font-size: 20px;
    margin-right: 10px;
    color: var(--text-color);
}

.social a :hover {
    color: var(--main-color);
}

.footer-box h3 {
    font-weight: 500;
    margin-bottom: 10px;
}

.footer-box li a {
    color: var(--text-color);
}

.footer-box li a :hover {
    color: var(--main-color);
}

.contact-info {
    display: flex;
    flex-direction: column;
}

.contact-info span {
    color: var(--text-color);
}

.copyright {
    padding: 20px;
    text-align: center;
    color: blue;
}


/*Making this website*/

@media(max-width:881px) {
    header {
        padding: 18px 4%;
    }
    section {
        padding: 50px 4%;
    }
}

@media(max-width:881px) {
    .home-text h1 {
        font-size: 2rem;
    }
    .shop-container,
    .new-container {
        grid-template-columns: repeat(auto-fit, maxmin(218px, auto));
    }
    .shop-container p {
        font-size: 1.2rem;
        font-weight: 500;
        align-items: left;
    }
}

@media(max-width:768px) {
    header {
        padding: 11px 4%;
    }
    #menu-icon {
        display: initial;
    }
    header .navbar {
        position: absolute;
        top: -500px;
        left: 0;
        right: 0;
        display: flex;
        flex-direction: column;
        background: white;
        box-shadow: 0 4px 4px rgb(0 0 0 /10%);
        transition: 0.2s ease;
        text-align: center;
    }
    .navbar a {
        padding: 1.5rem;
        display: block;
    }
    .navbar.active {
        top: 100%;
    }
    .navbar a :hover {
        color: white;
        background: var(--main-color);
    }
    .about {
        grid-template-columns: 1fr;
        text-align: center;
    }
    .about-img {
        padding-top: 1rem;
        order: 2;
    }
}

@media(max-width:491px) {
    .home-text h1 {
        font-size: 1.7rem;
    }
    .shop-container,
    .new-container {
        grid-template-columns: repeat(auto-fit, minmax(200px, auto));
    }
    .box .box-img {
        height: 300px;
    }
    .news-box input {
        width: 180px;
    }
    .about-text h2 {
        font-size: 1.2rem;
    }
}

.social-icons {
    color: gray;
    font-size: 3rem;
    grid-template-rows: repeat(auto-fit, minmax(100px, auto));
    align-items: center;
    justify-content: space-between;
    gap: 1rem;
    margin-left: 12rem;
    padding: 10px;
    width: 100%;
    flex-direction: column;
}

.social-icons :hover {
    color: darkblue;
}

.More-Links {
    position: relative;
    margin-top: 1rem;
    margin-left: 5px;
    justify-content: space-between;
    flex-direction: row-reverse;
    display: flex;
}

.ex-box {
    position: relative;
    margin-top: 1rem;
    justify-content: space-between;
    flex-direction: column;
    display: flex;
    width: 70%;
}

section.new .title-price h3 {
    width: 70%;
    height: 100%;
}

.logoutsys {
    background: #044d08;
    border-radius: 4px;
    padding: 5px 20px;
    font-size: 16px;
    letter-spacing: 1.6px;
    color: rgb(255, 255, 255);
    text-transform: uppercase;
    font-weight: 500;
    cursor: pointer;
    border: none;
    outline: none;
}
        </style>
  </body>
</html>
