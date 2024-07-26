<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../../assets/icons/fontawesome-free-6.5.1-web/css/all.css">
  <title>YourHome</title>
  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="../styles/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700&display=swap"
    rel="stylesheet">
</head>

<body id="top">
  <div class="testing" id="pay"></div>
  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

        <a href="#" class="logo">
            <img loading="lazy" src="../../../assets/images/logo.png" width="200px">
            <div style="color:hsl(290, 67%, 27%)">
            </div>
        </a>

        <nav class="navbar container" data-navbar>
            <h3>
                <ul class="navbar-list">
                    <li><a class="navbar-link scrollto active" href="#home" data-nav-link>Home</a></li>
                    <li><a href="./list_page.php" class="navbar-link scrollto" data-nav-link>Listing</a></li>
                    <li> <a href="./home_page.php#about" class="navbar-link scrollto" data-nav-link>About Us</a>
                    </li>
                    <li><a href="./home_page.php#contact" class="navbar-link scrollto" data-nav-link>Contact Us</a>
                    </li>
                </ul>
            </h3>
        </nav>
        <?php
    session_start();
    if (isset($_SESSION['id']) ) {
        echo '<a href="profile.php" class="btn btn-secondary">Profile</a>';
        echo '<a href="postForm2.php" class="btn btn-secondary">Post</a>';
        echo '<a href="../../back_end/logout.php" class="btn btn-secondary">Logout</a>';
    } else {
        echo '<a href="signIn.php" class="btn btn-secondary">Sign In</a>';
        echo '<a href="signup.php" class="btn btn-secondary">SignUp</a>';
    }
    ?>
        <button class="nav-toggle-btn" aria-label="Toggle menu" data-nav-toggler>
            <ion-icon name="menu-outline" aria-hidden="true" class="menu-icon"></ion-icon>
            <ion-icon name="close-outline" aria-hidden="true" class="close-icon"></ion-icon>
        </button>

    </div>
</header>

  <main>
    <article class="article">

      <!-- 
        - #HERO
      -->

      <section id='home' class="section hero" aria-label="hero">
        <div class="container">
          <div class="hero-bg">
            <div class="hero-content">

              <h1 class="h1 hero-title">
                <p>
                  "Home is where the heart is."</p>
                </p>
                <p>
                <H3><span style="color: blue;">
                    <h4 style="color: rgb(241, 236, 239);">
                      Discover your dream home hassle-free on our real estate platform,
                      <br>where your heart finds its perfect match,YourHome.
                    </h4>
                  </span></p>
            </div>
          </div>


        </div>
      </section>

      <!-- 
        - #ABOUT
      -->

      <section class="section about" aria-label="about" id="about">
        <div class="container">

          <div class="about-banner img-holder" style="--width: 600; --height: 700;">
            <img src="../../../assets/images/about-banner.jpg" width="600" height="700" loading="lazy"
              alt="about banner" class="img-cover">

            <button class="play-btn" aria-label="play video">
              <ion-icon name="play" aria-hidden="true"></ion-icon>
            </button>
          </div>
          <div class="about-content">
            <h2 class="h2 section-title" style="color:hsl(290, 67%, 27%) ;"><b>About Us</b></h2>

            <p class="section-text">
              <style color:black>
                color:black
              </style>
              Welcome to Your Dream Home, where your aspirations for a perfect home meet reality.
              We're passionate about connecting buyers with their dream homes and sellers
              with the ideal buyers, making the home buying and selling process smooth and effortless.
            </p>
            <br>
            <h2 class="h2 section-title" style="color:hsl(290, 67%, 27%) ;"><b>Unlock Endless Possibilities</b></h2>

            <p class="section-text">
              <style color:black>
                color:black
              </style>
              Browse through a vast selection of diverse properties, from cozy
              cottages to luxurious estates, all conveniently listed with
              detailed information and high-quality photos.
            </p>
            <br>
            <h2 class="h2 section-title" style="color:hsl(290, 67%, 27%) ;"><b>Find Your Perfect Match</b></h2>

            <p class="section-text">
              <style color:black>
                color:black
              </style>
              Utilize our powerful search tools to filter properties based on your specific needs and preferences,
              narrowing down your options to perfectly fit your dream home vision.
            </p>

            <a href="#" class="btn btn-primary">Learn More</a>

          </div>

        </div>
      </section>


      <h1 class="property-tile">Featured Properties </h1>



      <div class="property-list" id="property-lists">
      </div>
      <div class="more-btn">
        <a href="./list_page.php" class="view-more">View More</a>
      </div>


      <!-- 
        - #SERVICE
      -->

      <section id="services" class="section service" aria-label="service">
        <div class="container">

          <br>
          <h2 class="h2 section-title" style="color:hsl(290, 67%, 27%) ;"><b>How it Works</b></h2>

          <p class="section-text">
            A fantastic platform for purchasing, selling, and renting properties directly,
            eliminating the need for agents or commissions.
          </p>

          <ul class="service-list">

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="home-outline"></ion-icon>
                </div>

                <h3 class="h3 card-title" style="color:hsl(290, 67%, 27%);"><b>Neighborhood Information and Property
                    History</b></h3>

                <p class="card-text">
                  Discover valuable details about the local amenities, schools, and transportation options.
                  Uncover the property's historical data, including ownership records.
                </p>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="briefcase-outline"></ion-icon>
                </div>

                <h3 class="h3 card-title" style="color:hsl(290, 67%, 27%);"><b>Virtual Tour</b></h3>


                <p class="card-text">
                  Step inside and explore properties from the comfort of your own home with our immersive virtual tour
                  experience.
                </p>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="key"></ion-icon>
                </div>

                <h3 class="h3 card-title" style="color:hsl(290, 67%, 27%);"><b>Comprehensive Property Details</b></h3>


                <p class="card-text">
                  Access detailed and comprehensive information about each property, including specifications, features,
                  and amenities, to make informed decisions.
                </p>

              </div>
            </li>

          </ul>

        </div>
      </section>

      <!-- 
        - #CONTACT
      -->

      <section class="section contact" aria-label="contact" id="contact">
        <div class="container">

          <h2 class="h2 section-title" style="color:hsl(290, 67%, 27%) ;"><b>Have Questions? Get in Touch!</b></h2>

          <p class="section-text">
            A great plateform to buy, sell and rent your properties without any agent or commisions.
          </p>

          <button class="btn btn-primary">
            <ion-icon name="call-outline"></ion-icon>

            <span class="span">Contact us</span>
          </button>
        </div>
      </section>


      <!-- 
        - #NEWSLETTER
      -->

      <section class="newsletter" aria-label="newsletter">
        <div class="container">

          <div class="wrapper">
            <h2 class="h2 section-title" style="color:hsl(290, 67%, 27%) ;"><b>Any Feedbacks?</b></h2>

            <p class="section-text">Anything you want to say</p>
          </div>

          <form action="" class="newsletter-form">
            <input type="text" name="email_address" placeholder="Enter your Feedbacks" aria-label="Enter your email"
              required class="email-field">

            <button type="submit" class="btn btn-secondary">Submit</button>
          </form>

        </div>
      </section>

    </article>
  </main>


  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand">
          <a href="#home" class="logo">
            <img loading="lazy" src="../../../assets/images/logo.png" width="100px">
            <div style="color:hsl(290, 67%, 27%)">
            </div>
          </a>

          <p class="footer-text">
            A great plateform to buy, sell and rent your properties without any agent or commisions.
          </p>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Details</p>
          </li>

          <li>
            <a href="#about" class="footer-link">
              <ion-icon name="chevron-forward"></ion-icon>

              <span class="span">About us</span>
            </a>
          </li>

          <li>
            <a href="#services" class="footer-link">
              <ion-icon name="chevron-forward"></ion-icon>

              <span class="span">Services</span>
            </a>
          </li>

          <li>
            <a href="./signIn.php" class="footer-link">
              <ion-icon name="chevron-forward"></ion-icon>

              <span class="span">Login</span>
            </a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Useful Links</p>
          </li>

          <li>
            <a href="#home" class="footer-link">
              <ion-icon name="chevron-forward"></ion-icon>

              <span class="span">Terms of Services</span>
            </a>
          </li>

          <li>
            <a href="#home" class="footer-link">
              <ion-icon name="chevron-forward"></ion-icon>

              <span class="span">Privacy Policy</span>
            </a>
          </li>

          <li>
            <a href="./list_page.php" class="footer-link">
              <ion-icon name="chevron-forward"></ion-icon>

              <span class="span">Listing</span>
            </a>
          </li>

          <li>
            <a href="#contact" class="footer-link">
              <ion-icon name="chevron-forward"></ion-icon>

              <span class="span">Contact</span>
            </a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Contact Details</p>
          </li>

          <li class="footer-item">
            <ion-icon name="location-outline"></ion-icon>

            <address class="address">
              Addis Ababa, Ethiopia <br> Location:
              <a href="https://maps.app.goo.gl/4TRu4bCxcUg8JVGF9"> View on Google map</a>
            </address>
          </li>

          <li class="footer-item">
            <ion-icon name="mail-outline"></ion-icon>

            <a href="www.yourhome.com" class="footer-link">YourHome@gmail.com</a>
          </li>

          <li class="footer-item">
            <ion-icon name="call-outline"></ion-icon>

            <a href="Tel:+2519999794" class="footer-link">+2519899764</a>
          </li>

        </ul>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2024 YourHome. All Right Reserved by <a href="#" class="copyright-link">YOURHOME</a>.
        </p>

        <ul class="social-list">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

        </ul>

      </div>
    </div>

  </footer>


  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="arrow-up" aria-hidden="false"></ion-icon>
  </a>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script type="module" src="../js/home_page.js"></script>

</body>

</html>