
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="styles.css" />
  <title>Buy Sell Property Online</title>
</head>

<body>
  <nav>
    <div class="nav__header">
      <div class="nav__logo">
        <a href="#">Hosale.</a>
      </div>
      <div class="nav__menu__btn" id="menu-btn">
        <i class="ri-menu-3-line"></i>
      </div>
    </div>
    <ul class="nav__links" id="nav-links">
      <li><a href="#home">HOME</a></li>
      <li><a href="./pages/buy.html">BUY</a></li>
      <li><a href="./pages/sell.php">SELL</a></li>
      <li><a href="./pages/contact.php">CONTACT</a></li>
      <li><a href="./pages/login.php">LOGIN</a></li>
    </ul>
  </nav>

  <header id="header">
    <div class="header__image"></div>
    <div class="header__content">
      <h1>Easy way to find your dream property</h1>
    </div>
    <form action="/">
      <div class="input__group">
        <label for="location">Location</label>
        <input type="text" placeholder="Location" required />
      </div>
      <div class="input__group">
        <label for="propertyType">Property Type</label>
        <input type="text" placeholder="Property Type" required />
      </div>
      <div class="input__group">
        <label for="price">Max Price</label>
        <input type="text" placeholder="Max Price" required />
      </div>
      <button class="btn">
        <i class="ri-search-line"></i>
      </button>
    </form>
  </header>

  <section class="service" id="works">
    <div class="section__container service__container" id="service">
      <h2 class="section__header">How It Works</h2>
      <div class="service__grid">
        <div class="service__card">
          <img src="assets/service-1.png" alt="service" />
          <h4>Evaluate Property</h4>
          <p>
            Get a detailed assessment of your property's market value and
            potential. Our experts ensure you have the right insights to make
            informed decisions.
          </p>
        </div>
        <div class="service__card">
          <img src="assets/service-2.png" alt="service" />
          <h4>Meet Your Agent</h4>
          <p>
            Connect with a professional real estate agent who will guide you
            every step of the way. Personalized support makes your buying or
            selling journey effortless.
          </p>
        </div>
        <div class="service__card">
          <img src="assets/service-3.png" alt="service" />
          <h4>Close The Deal</h4>
          <p>
            Complete your transaction with confidence and ease. We ensure a
            smooth process so you can secure your dream property without
            hassle.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="experience" id="services">
    <div class="experience__image"></div>
    <div class="experience__content">
      <h2 class="section__header">We Provide You<br />The Best Experience</h2>
      <p>
        Find your perfect property with ease!
        Whether buying, selling, or investing,
        we offer expert guidance, personalized support, and the best deals.
        Browse our listings, make informed decisions, and enjoy a seamless real estate experience.
        Let’s make your property journey hassle-free!
      </p>
      <div class="experience__btn">
        <button class="btn"><a style="color: white;" href="./pages/buy.html">ALL PROPERTY</a></button>
      </div>
    </div>
    <div class="experience__stats">
      <div>
        <h4>300+</h4>
        <p>Deal Completed</p>
      </div>
      <div>
        <h4>15+</h4>
        <p>Awards Gained</p>
      </div>
      <div>
        <h4>500+</h4>
        <p>Buyer & Seller</p>
      </div>
    </div>
  </section>

  <section class="subscribe" id="contact">
    <h2 class="section__header">Subscribe<br />Our Newsletter</h2>
    <form action="index.php" method="POST" enctype="multipart/form-data">
      <input type="email" name="email" placeholder="Enter your email" required />
      <button class="btn" nane="submit">Subscribe</button>
    </form>

    <!-- For Stroring Subscibed Email in Database -->
    <?php

      if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        include("./pages/conn.php");

        // Check connection                
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
          $email = $_POST['email'];
          $query = "INSERT INTO subscribe (email) VALUES ($email')";
          if ($conn->query($query) === TRUE) {
            echo "<p>Subscribed</p>";    
      } else {
        echo "<p>Error: " . $conn->error."</p>";
      }
      $conn->close();
      }
    ?>
  </section>

  <footer>
    <div class="section__container footer__container">
      <div class="footer__col">
        <div class="footer__logo">
          <a href="#">Hosale.</a>
        </div>
        <p>
          At Hosale, we make buying, selling, and investing in properties easy
          and stress-free. Let's turn your real estate goals into reality!
        </p>

      </div>
      <div class="footer__col">
        <h4>OUR COMPANY</h4>
        <ul class="footer__links">
          <li><a href="./pages/AboutUs.html">About Us</a></li>
          <li><a href="#services">Our Services</a></li>
          <li><a href="#works">How It Works</a></li>
          <li><a href="./pages/contact.html">Contact Us</a></li>
        </ul>
      </div>

      <div class="footer__col">
        <h4>FOLLOW US</h4>
        <ul class="footer__socials">
          <li>
            <a href="https://www.instgram.com/gosai.18"><i class="ri-instagram-fill"></i></a>
          </li>
          <li>
            <a href="https://www.youtube.com/@Warrior_Gosai"><i class="ri-youtube-fill"></i></a>
          </li>
          <li>
            <a href="https://in.linkedin.com/in/gosai-kartik"><i class="ri-linkedin-fill"></i></a>
          </li>
          <li>
            <a href="http://talkg.rf.gd/"><i class="ri-chrome-fill"></i></a>
          </li>
        </ul>
      </div>
    </div>
    <div class="footer__bar">
      Copyright © 2025 . All rights reserved ;)
    </div>
  </footer>

  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="main.js"></script>
</body>

</html>
