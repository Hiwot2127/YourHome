
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../assets/icons/fontawesome-free-6.5.1-web/css/all.css">
    <title>Properties</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            display: flex;
            justify-content: space-between;
            max-width: 1200px;
            margin: 20px auto;
        }
        .user-info {
            margin-top: 100px;
            width: 30%;
            background-color: #f2f2f2;
            padding: 20px;
            border-radius: 5px;
        }
        .post-section {
            margin-top: 120px;
 
            width: 65%;
        }
        .heading {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }
        .post {
            margin-bottom: 30px;
        }
        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        li {
            margin-bottom: 10px;
        }
        .map iframe {
            width: 100%;
            height: 300px;
            border: 0;
        }
        .video iframe {
            width: 100%;
            height: 315px;
            border: 0;
        }
        img {
            max-width: 100%;
            height: auto;
        }
    </style>
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
        if (isset($_SESSION['first_name'])) {
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
    <div class="container">
    <section class="user-info">
    <?php
include 'helpers.php';
?>
                    <img class="profile-icon" src="<?php echo get_base_url(); ?>/src/back_end/<?php echo $_SESSION['user_picture']; ?>" width="400" height="200" alt="User Image">
                </li>
        <h2>Welcome, <?php echo $_SESSION['first_name'] . " " . $_SESSION['last_name']; ?></h2>
        <ul class="contact-details">
            <li><strong>Email:</strong> <?php echo $_SESSION['email']; ?></li>
            <li><strong>Phone Number:</strong> <?php echo $_SESSION['phone_number']; ?></li>
            <li><strong>City:</strong> <?php echo $_SESSION['city']; ?></li>
        </ul>
    </section>

    <section class="post-section">
        <h2 class="heading">Your Posts</h2>
        <?php foreach ($_SESSION['posts'] as $post): ?>
        <div class="post">
            <ul>
            <h2> <?php echo $post['title'] ?></h2>
            <?php
include 'helpers.php';
?>
                    <img  src="<?php echo get_base_url(); ?>YourHome/src/back_end/<?php echo $post['user_image']; ?>" width="400" height="200" alt="House Image">
                <li><strong>Type:</strong> <?php echo $post['property_type']; ?></li>
                <li><strong>Phone Number:</strong> <?php echo $post['phone_number']; ?></li>
                <li><strong>Telegram Account:</strong> <?php echo $post['telegram_account']; ?></li>
                <li><strong>Map Address: </strong> <span><a class="link-underline-primary" href="<?php echo($post['map_address']); ?>">Link to Map</a></span></li>
                <li class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=<?php echo urlencode($post['map_address']); ?>" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </li>
                <?php if(isset($post['virtual_tour'])): ?>
                <li><strong>Virtual Tour:</strong></li>
                <li class="video">
                    <iframe width="560" height="315" src="<?php echo $post['virtual_tour']; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </li>
                <?php endif; ?>
                <li><strong>Image:</strong></li>
                <li>
                <?php
include 'helpers.php';
?>
                    <img src="<?php echo get_base_url(); ?>YourHome/src/back_end/<?php echo $post['house_picture']; ?>" alt="House Image">
                </li>
            </ul>
        </div>
        <?php endforeach; ?>
    </section>
</div>

    </main>

    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="footer-brand">
                    <a href="./index.html" class="logo">
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
                        <a href="./home_page.php#about" class="footer-link">
                            <ion-icon name="chevron-forward"></ion-icon>
                            <span class="span">About us</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">
                            <ion-icon name="chevron-forward"></ion-icon>
                            <span class="span">Services</span>
                        </a>
                    </li>
                    <li>
                        <a href="./signIn2.html" class="footer-link">
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
                        <a href="#" class="footer-link">
                            <ion-icon name="chevron-forward"></ion-icon>
                            <span class="span">Terms of Services</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">
                            <ion-icon name="chevron-forward"></ion-icon>
                            <span class="span">Privacy Policy</span>
                        </a>
                    </li>
                    <li>
                        <a href="#list" class="footer-link">
                            <ion-icon name="chevron-forward"></ion-icon>
                            <span class="span">Listing</span>
                        </a>
                    </li>
                    <li>
                        <a href="./home_page.php#conatct" class="footer-link">
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
                        <a href="Tel:+2519999794" class="footer-link">+2519999999</a>
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

    <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
        <ion-icon name="arrow-up" aria-hidden="true"></ion-icon>
    </a>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script type="module" src="../../utils/filter.js"></script>
  
    <script>
        // Fetch properties from the server
        fetch('../../back_end/authentication.php')
            .then(response => response.json())
            .then(data => {
                const propertyList = document.getElementById('property-list');
                
                data.forEach(property => {
                    const propertyItem = document.createElement('div');
                    propertyItem.innerHTML = `
                        <div class="property-card-container">
                            <img class="img" src="uploads/${property.house_picture}" alt="House Picture">
                            <div class="propertyName">${property.title}</div>
                            <ul class="propertyList">
                                <li>Area: ${property.area} sq ft</li>
                                <li class="bed">Bedrooms: ${property.bedrooms}</li>
                                <li class="bath">Bathrooms: ${property.bathrooms}</li>
                                <li class="price">Price: ${property.price} ETB</li>
                            </ul>
                            <a class="property-detail-button" href="property_detail.php?id=${property.id}">Property Detail</a>
                        </div>
                    `;
                    propertyList.appendChild(propertyItem);
                });
            })
            .catch(error => console.error('Error fetching properties:', error));
    </script>
</body>

</html>
