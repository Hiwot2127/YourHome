<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="../styles/sign_up.css">
  <title>Sign Up</title>
</head>

<body>
  <div class="sign-up-main-container">
    <nav class="navbar-container">
      <div class="logos">
        <img width="120px" height="70px" src="../../../assets//images/logo.png" alt="logo">
      </div>
      <div class="nav-right-list">
        <a class="navbar-home" href="./home_page.php" data-nav-link>Home</a></li>
        <a href="./signIn.php" class="btn btn-secondary">SignIn</a>
      </div>
    </nav>

    <div class="sign-up-container">
      <div class="left-section">
        <img loading="lazy" width="300px" src="../../../assets//images/sign_up.svg" alt="Logo">

      </div>
      <div class="right-section">
      <?php
include 'helpers.php';
?>
        <form action="http://localhost/YourHome/src/back_end/register.php" method="post" enctype="multipart/form-data">
          <div class="upload-photo-section">
            <input type="file" id="photo-upload" name="photo" accept="image/*">
            <label for="photo-upload">
              <label for="profile_picture">
              <img loading="lazy" src="../../../assets//images/photo_2024-01-16_03-57-32.jpg" alt="Profile Icon"
              class="profile-icon">Upload profile picture</label>
              <input type="file" id="profile_picture"  name="profile_picture" accept="image/*" >
            </label>
          </div>

          <div class="input-group">
            <label for="first-name">First Name:</label>
            <input type="text" id="first-name"   name="first_name" placeholder="Enter your first name" required>
          </div>
          <div class="input-group">
            <label for="last-name">Last Name:</label>
            <input type="text" id="last-name"  name="last_name" placeholder="Enter your last name" required>
          </div>

          <div class="input-group">
            <label for="email">Email:</label>
            <input type="email" id="email"   name="email" placeholder="e.g., johndoe@example.com" required>
          </div>

          <div class="input-group">
            <label for="phone-number">Phone Number:</label>
            <input type="tel" id="phone-number"  name="phone_number" placeholder="e.g., +251912345678" required>
          </div>
          <div class="input-group">
            <label for="city">City:</label>
            <input type="text" id="city"  name="city" placeholder="Enter your city">
          </div>

          <div class="input-group">
            <label for="password">Password:</label>
            <input type="password" id="password"  name="password" placeholder="Enter your password" required>
            <p id="password-length-message" style="display: none;">Password must be at least 8 characters</p>
          </div>

          <div class="input-group">
            <label for="confirm-password">Confirm Password:</label>
            <input type="password" id="confirm-password"  name="confirm_password" placeholder="Confirm your password" required>
            <p id="confirm-password-message" style="display: none;">Password must match</p>
          </div>


          <button type="submit">Sign Up</button>
        </form>
        <p>Already have an account? <a href="signIn.php">Sign In</a></p>
      </div>
    </div>
  </div>
  <script type="module" src="../../utils/validator.js"></script>
</body>

</html>