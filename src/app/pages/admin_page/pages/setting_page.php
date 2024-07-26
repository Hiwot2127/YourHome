<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting</title>
    <link rel="stylesheet" href="../styles/setting.css">
    <link rel="stylesheet" href="../styles/general_style.css">
    <link rel="stylesheet" href="../../../../../assets//icons/fontawesome-free-6.5.1-web/css/all.css">
</head>

<body>
    <div class="admin-dashboard-container">
        <div class="admin-dashboard-container-left-container">
            <img src="../../../../../assets//images/logo2.png" alt="" height="80px" class="side-bar-image">
        <!-- <a href="./admin_dashboard.html" class="dashboard-button">
            <icon class="fa fa-diamond"></icon>
            <span class="btn-label">Over view</span>
         </a> -->
        <a href="./user_list.html"  class="dashboard-button">
            <icon class="fa fa-users"></icon>
            <span class="btn-label">Tenants</span>
        </a>
        <a href="./repair_page.html" class="dashboard-button">
            <icon class="fa fa-exchange"></icon>
            <span class="btn-label">Payment</span>
        </a>
        <a href="repair_page.html" class="dashboard-button">
            <icon class="fa fa-wrench"></icon>
            <span class="btn-label">Maintenance</span>
        </a>
        <a id="users" href="./setting_page.html" class="dashboard-button">
            <icon class="fa fa-gear"></icon>
            <span class="btn-label">Setting</span>
        </a>
        </div>
        <div class="admin-dashboard-container-right-container">
            <div class="admin-dashboard-container-right-top-container">
                <h2 class="dashboard-header-title">Setting</h2>
                <a href="../../home_page.php">Home</a>
            </div>
           <div class="admin-dashboard-container-right-bottom-container">
            <div class="admin-login-card">
                <h3 class="admin-login-title">Rest Password</h1>
                <div class="input-field">
                    <input type="password" id="password" placeholder="Old password">
                </div>
                    <div class="input-field">
                        <input type="password" id="password" placeholder="New password">
                    </div>
                    <button class="admin-login-btn">Rest</button>
            </div>
           </div>
        </div>
    </div>
</body>

</html>