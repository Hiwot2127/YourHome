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
  <link rel="stylesheet" href="../styles/sign_in.css">
  <title>Sign In</title>
</head>

<body>
  <div class="sign-up-main-container">
    <nav class="navbar-container">
      <div class="logos">
        <img width="120px" height="70px" src="../../../assets//images/logo.png" alt="logo">
      </div>
      <div class="nav-right-list">
        <a class="navbar-home" href="./home_page.php" data-nav-link>Home</a></li>
        <a href="./signup.php" class="btn btn-secondary">SignUp</a>
      </div>
    </nav>

    <div class="sign-up-container">
      <div class="left-section">
        <img loading="lazy" width="300px" src="../../../assets/images/sign_in.svg" alt="Logo">

      </div>
      <div class="right-section">
        <h1 class="sign-in-title">SignIn</h1>
        <?php
include 'helpers.php';
?>
        <form action="http://localhost/YourHome/src/back_end/authentication.php" method="post" enctype="multipart/form-data">
          <div class="input-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="e.g., johndoe@example.com">
          </div>
          <div class="input-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" pattern=".{8,}" required>
            <p>Password must be at least 8 characters</p>
          </div>
          <button type="submit">SignIn</button>
        </form>
        <p>Don't have an account? <a href="./signup.php">SignUp</a></p>
      </div>
    </div>
  </div>
</body>

</html>