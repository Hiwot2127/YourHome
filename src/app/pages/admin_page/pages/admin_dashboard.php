<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../styles/admin_dashboard.css" />
    <link
      rel="stylesheet"
      href="../../../../../assets//icons/fontawesome-free-6.5.1-web/css/all.css"
    />
  </head>
  <body>
    <div class="admin-dashboard-container">
      <div class="admin-dashboard-container-left-container">
        <img
          src="../../../../../assets//images/logo2.png"
          alt=""
          height="80px"
          class="side-bar-image"
        />
        <!-- <a href="./admin_dashboard.html" class="dashboard-button">
                <icon class="fa fa-diamond"></icon>
                <span class="btn-label">Dashboard</span>
            </a> -->
        <a href="./user_list.php" class="dashboard-button">
          <icon class="fa fa-users"></icon>
          <span class="btn-label">Users</span>
        </a>
        <a href="./repair_page.php" class="dashboard-button">
          <icon class="fa fa-exchange"></icon>
          <span class="btn-label">Transaction</span>
        </a>
        <div class="dashboard-button">
          <icon class="fa fa-archive"></icon>
          <span class="btn-label">Repair</span>
        </div>
        <div class="dashboard-button">
          <icon class="fa fa-gear"></icon>
          <span class="btn-label">Setting</span>
        </div>
      </div>
      <div class="admin-dashboard-container-right-container">
        <div class="admin-dashboard-container-right-top-container">
          <h2 class="dashboard-header-title">Dashboard</h2>
          <a href="../../home_page.php">Home</a>
        </div>
      </div>
    </div>
  </body>
</html>
