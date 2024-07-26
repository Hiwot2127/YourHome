
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../assets/icons/fontawesome-free-6.5.1-web/css/all.css">
    <title>Properties</title>
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
        if (isset($_SESSION['id'])) {
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

            <h1 class="property-tile">Best properties Available </h1>

            <div class="hero-form-wrapper">
                <div class="hero-form">
                    <form id="search-form">
                        <div class="input-wrapper">
                            <label for="category" class="input-label">Categories</label>
                            <select name="category" id="category" class="dropdown-list">
                                <option value="sell">For Sale</option>
                                <option value="rent">For Rent</option>
                            </select>
                        </div>
                        <div class="input-wrapper">
                            <label for="locate" class="input-label">Location</label>
                            <input type="text" name="location" id="locate" placeholder="Location"  class="input-field">
                        </div>
                        <div class="input-wrapper">
                            <label for="min-price" class="input-label">Min Price</label>
                            <select name="min_price" id="min-price" class="dropdown-list">
                                <option value="0">Min Price</option>
                                <option value="5000">5000 ETB</option>
                                <option value="10000">10,000 ETB</option>
                                <option value="20000">20,000 ETB</option>
                                <option value="30000">30,000 ETB</option>
                                <option value="40000">40,000 ETB</option>
                                <option value="50000">50,000 ETB</option>
                                <option value="60000">60,000 ETB</option>
                            </select>
                        </div>
                        <div class="input-wrapper">
                            <label for="max-price" class="input-label">Max Price</label>
                            <select name="max_price" id="max-price" class="dropdown-list">
                                <option value="1000000">Max Price</option>
                                <option value="500000">500,000 ETB</option>
                                <option value="1000000">1,000,000 ETB</option>
                                <option value="2000000">2,000,000 ETB</option>
                                <option value="3000000">3,000,000 ETB</option>
                                <option value="4000000">4,000,000 ETB</option>
                                <option value="5000000">5,000,000 ETB</option>
                                <option value="6000000">6,000,000 ETB</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div>
            </div>

            <div class="property-list" id="property-lists">
            </div>
            
        </article>
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
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('search-form').addEventListener('submit', function (e) {
                e.preventDefault();
    
                const category = document.getElementById('category').value;
                const location = document.getElementById('locate').value;
                const minPrice = document.getElementById('min-price').value;
                const maxPrice = document.getElementById('max-price').value;
    
                fetch(`../../back_end/search_properties.php?category=${category}&location=${location}&min_price=${minPrice}&max_price=${maxPrice}`)
                    .then(response => response.json())
                    .then(data => {
                        const propertyList = document.getElementById('property-lists');
                        propertyList.innerHTML = '';
    
                        if (data.length > 0) {
                            data.forEach(property => {
                                const propertyItem = document.createElement('div');
                                propertyItem.className = 'property-item';
    
                                propertyItem.innerHTML = `
                                <div class="property-card-container propertyList   ">
                                <li>
                                <?php
include 'helpers.php';
?>
                    <img class="property-image" src="<?php echo get_base_url(); ?>/src/back_end/${property.house_picture}" width="400" height="200" alt="House Image">
                </li>
                                    <div class="property-name">${property.title}</div>
                                    <button class="property-detail property-detail-button i" data-id="${property.id}">Property Detail</button>
                                    <div class="divider"></div>
                                    <ul class="property-info">
                                        <div class="800ftx200ft"><span class="fa fa-cube"></span> ${property.area} sq ft</div>
                                        <div class="Bed" ><span class="fa fa-bed"></span> ${property.bedrooms}</div>                                         
                                    </ul>
                                    <div class="divider"></div>
                                    <div class="property-name">Price</div>
                                    <div class> ${property.price} ETB</div>
                                  
                                    </div>

                                </div>
                                `;
                                propertyItem.querySelector('.property-detail-button').addEventListener('click', (e) => {
                                    const propertyId = e.target.getAttribute('data-id');
                                    window.location.href = `property_details.php?id=${propertyId}`;
                                });
                                propertyList.appendChild(propertyItem);
                            });
                        } else {
                            propertyList.innerHTML = '<p>No properties found</p>';
                        }
                    })
                    .catch(error => console.error('Error fetching properties:', error));
            });
        });
    </script>
    
    <form id="search-form">
        <!-- form elements here -->
    </form>
    <div id="property-lists"></div>
    
    
</body>

</html>
