<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Property Details</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0..1,0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../styles/property_details.css">
  <link rel="stylesheet" href="../styles/style.css">
</head>

<body>

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


  <div class="containerc">
    <div class="property-image">
      
    </div>

    <div class="property-details">
      
    </div>
  </div>

  </div>

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
            <a href="#" class="footer-link">
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
            <a href="#" class="footer-link">
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
  <script>
    document.addEventListener('DOMContentLoaded', function () {
        const urlParams = new URLSearchParams(window.location.search);
        const propertyId = urlParams.get('id');

        if (propertyId) {
            fetch(`../../back_end/get_property_details.php?id=${propertyId}`)
                .then(response => response.json())
                .then(property => {
                    if (property.error) {
                        document.querySelector('.container').innerHTML = `<p>${property.error}</p>`;
                    } else {
                        const propertyDetails = document.querySelector('.containerc');
                        propertyDetails.innerHTML = `
                        <div class="property-image">
                            <?php
include 'helpers.php';
?>
                    <img class="property-image mr-5"  src="<?php echo get_base_url(); ?>YourHome/src/back_end/${property.house_picture}" width="400" height="200" alt="House Image">
                </div>
                                        <div class="property-detail">

                            <h2 style="color: hsl(290, 67%, 27%);"><b>${property.title}</b></h2>
                            
                            <p><strong>Property Type:</strong> ${property.property_type}</p>
                            <div class="bed">
                                <span class="material-symbols-rounded meta-icon" aria-hidden="true">bed</span>
                                <p><strong>Bedrooms:</strong> ${property.bedrooms}</p>
                                <span class="material-symbols-rounded meta-icon" aria-hidden="true">bathtub</span>
                                <p><strong>Bathrooms:</strong> ${property.bathrooms}</p>
                                <span class="material-symbols-rounded meta-icon" aria-hidden="true">straighten</span>
                                <p><strong>Area:</strong> ${property.area} sqm</p>
                            </div>
                            <p><strong>Garage:</strong> ${property.garage} Parking Spaces</p>
                            <p><strong>Year Built:</strong> ${property.year_built}</p>
                            <p><strong>Location:</strong> ${property.map_address}</p>

                            <div class="property-features">
                                <h3>Contact-info:</h3>
                                <div class="DeYhjd"></div>
                                <div class="social-icons">
                                    <a href="#" class="fa fa-facebook"></a>
                                    <a href="#" class="fa fa-twitter"></a>
                                </div>
                            </div>
                            <div>
                                <span class="phone-icon fa fa-phone"></span>
                                ${property.phone_number}
                            </div>
                            <div class="property-amenities">
                                <h3>Amenities:</h3>
                                <ul>
                                    <li>Fully equipped gym</li>
                                    <li>Garage</li>
                                    <li>Modern kitchen</li>
                                </ul>
                            </div>
                            <div class="property-price">
                                <h3>Price:</h3>
                                <p>${property.price} ETB</p>
                            </div>
                            <div class="tour">
                                <h3>Tour:</h3>
                                
                    <iframe width="560" height="315" src="${property.virtual_tour}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="map">
                                <iframe src="https://www.google.com/maps/embed?pb=${property.map_embed_url}" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>   
                            </div>
                            </div>
                        `;
                    }
                })
                .catch(error => console.error('Error fetching property details:', error));
        } else {
            document.querySelector('.property-details').innerHTML = '<p>No property ID provided</p>';
        }
    });
</script>

</body>

</html>