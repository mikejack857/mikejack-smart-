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
  </body>
</html>