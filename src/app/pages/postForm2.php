<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../styles/post_form.css">
    <link rel="stylesheet" href="../styles/payment.css">
    <link rel="stylesheet" href="../../../assets/icons/fontawesome-free-6.5.1-web/css/all.css">
    <title>Post Property
    </title>
</head>
<body>
    <div id="payment-modal" class="payment-container">
        <div class="close-tag">
            <i id="close-icon" class="fa fa-times"></i>
        </div>
        <div class="p-container">
            <img width="30%" src="../../../assets/images/payment.svg" alt="">
            <form id="chapa-payment-form" method="POST" action="../../back_end/process_payment.php" enctype="multipart/form-data">
                <input type="hidden" name="public_key" value="CHAPUBK_TEST-2CPxQm1XnSZZtblm3m1czqHUJ6HtobIP" />
                <input type="hidden" name="tx_ref" value="negsnmxer-tx-123456784sss9
                a" />
                <input type="hidden" name="amount" value="100" />
                <input type="hidden" name="currency" value="ETB" />
                <input type="hidden" name="email" value="caaliidha@gmail.com" />
                <input type="hidden" name="first_name" value="Caalii" />
                <input type="hidden" name="last_name" value="Dha" />
                <input type="hidden" name="title" value="Let us do this" />
                <input type="hidden" name="description" value="Paying with Confidence with cha" />
                <input type="hidden" name="logo" value="https://chapa.link/asset/images/chapa_swirl.svg" />
                <input type="hidden" name="callback_url" value="http://127.0.0.1:5502/src/back_end/post_property.php" />
                <input type="hidden" name="return_url" value="http://127.0.0.1:5502/src/app/pages/profile.php" />
                <input type="hidden" id="property-data" name="property_data" />

                <button width="80%" type="submit">Pay Now</button>
        </div>
    </div>

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

    <div class="listing-form">
        <div class="left-section">
            <img width="80%" src="../../../assets/images/post.svg" alt="">
        </div>
        <div class="right-section">
            <div class="top-image">
                <img src="image_2024-01-16_043239060.png" alt="">
            </div>
            <div class="form-title">Property Details         <?php echo($_SESSION['id']); ?>
            </div>
            <input id="user-id" type="hidden" value= <?php echo($_SESSION['id']) ?> >

            <label for="property-type">Property Type:</label>
            <select id="property-type" required>
                <option value="sell">For Sale</option>
                <option value="rent">For Rent</option>
            </select>

            <label for="house-picture">Picture of the House</label>
            <input type="file" name="house_picture" id="house-picture" accept="image/*" >

            <label for="virtual-tour">Video or Virtual Tour:</label>
            <input type="text" id="virtual-tour" placeholder="Enter video URL" >

            <label for="phone-number">Phone Number:</label>
            <input type="tel" id="phone-number" placeholder="e.g., +251912345678" >

            <label for="telegram-account">Telegram Account</label>
            <input type="text" id="telegram-account" placeholder="e.g., @username" >

            <label for="title">Title:</label>
            <input type="text" id="title" placeholder="Enter the title of the listing" >

            <label for="map-address">Map Address of the House:</label>
            <input type="text" id="map-address" placeholder="Paste the Google Map link here" >

            <label for="bedrooms">Number of Bedrooms:</label>
            <input type="number" id="bedrooms" placeholder="Enter the number of bedrooms" min="0" >

            <label for="bathrooms">Number of Bathrooms:</label>
            <input type="number" id="bathrooms" placeholder="Enter the number of bathrooms" min="0" >

            <label for="area">Area of the House (sq ft):</label>
            <input type="number" id="area" placeholder="Enter the area in square feet" min="0" >

            <label for="details">Details for the Home:</label>
            <textarea id="details" placeholder="Enter details about the home"></textarea>

            <label for="year-built">Year Built:</label>
            <input type="date" id="year-built" placeholder="Enter the year the house was built" >

            <label for="price">Price:</label>
            <input type="number" id="price" placeholder="Enter the price" min="0" >

            <label for="property-history">Property History:</label>
            <textarea id="property-history" placeholder="Enter the property history"></textarea>

            <button id="btn" type="button">Submit Listing</button>
            </form>

        </div>
    </div>

    <script>
        document.getElementById('btn').addEventListener('click', function() {
            const userId = document.getElementById('user-id').value;;
            const propertyType = document.getElementById('property-type').value;
            const housePicture = document.getElementById('house-picture').files[0];
            const virtualTour = document.getElementById('virtual-tour').value;
            const phoneNumber = document.getElementById('phone-number').value;
            const telegramAccount = document.getElementById('telegram-account').value;
            const title = document.getElementById('title').value;
            const mapAddress = document.getElementById('map-address').value;
            const bedrooms = document.getElementById('bedrooms').value;
            const bathrooms = document.getElementById('bathrooms').value;
            const area = document.getElementById('area').value;
            const details = document.getElementById('details').value;
            const yearBuilt = document.getElementById('year-built').value;
            const price = document.getElementById('price').value;
            const propertyHistory = document.getElementById('property-history').value;

            const propertyData = {
                userId,
                propertyType,
                housePicture,
                virtualTour,
                phoneNumber,
                telegramAccount,
                title,
                mapAddress,
                bedrooms,
                bathrooms,
                area,
                details,
                yearBuilt,
                price,
                propertyHistory
            };

            document.getElementById('property-data').value = JSON.stringify(propertyData);

            document.getElementById('chapa-payment-form').submit();
        });
    </script>
    <script type="module" src="../js/payment.js"></script>
</body>
</html>
