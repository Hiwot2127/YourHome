<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/user_list.css">
    <link rel="stylesheet" href="../styles/general_style.css">
    <link rel="stylesheet" href="../../../../../assets//icons/fontawesome-free-6.5.1-web/css/all.css">
    <title>Maintenance</title>
</head>

<body>
    <div class="admin-dashboard-container">
        <div class="admin-dashboard-container-left-container">
            <img loading="lazy" src="../../../../../assets//images/logo2.png" alt="" height="80px"
                class="side-bar-image">
            <!-- <a href="./admin_dashboard.html" class="dashboard-button">
                <icon class="fa fa-diamond"></icon>
                <span class="btn-label">Over view</span>
            </a> -->
            <a href="./user_list.html"  class="dashboard-button">
                <icon class="fa fa-users"></icon>
                <span class="btn-label">Tenants</span>
            </a>
            <a href="./payment.php" class="dashboard-button">
                <icon class="fa fa-exchange"></icon>
                <span class="btn-label">Payment</span>
            </a>
            <a id="users" href="./repair_page.html" class="dashboard-button">
                <icon class="fa fa-wrench"></icon>
                <span class="btn-label">Maintenance</span>
            </a>
            <a href="./setting_page.html" class="dashboard-button">
                <icon class="fa fa-gear"></icon>
                <span class="btn-label">Setting</span>
            </a>
        </div>
        <div class="admin-dashboard-container-right-container">
            <div class="admin-dashboard-container-right-top-container">
                <h2 class="dashboard-header-title">Maintenance</h2>
                <a href="../../home_page.php">Home</a>
            </div>
            <div class="admin-dashboard-container-right-bottom-container">
                <div class="wrapper">
                    <table class="user-table-container">
                        <caption class="table-caption">Maintenance List</caption>
                        <tr class="user-table-header">
                            <th>Requested By Name</th>
                            <th>Home type</th>
                            <th>Phone number</th>
                            <th>Issues</th>
                        </tr>
                        <tr>
                            <th>Abdurehman</th>
                            <th>Villa</th>
                            <th>0933556677</th>
                            <th>Gate door need fixing</th>
                        </tr>
                        <tr>
                            <th>Abdurehman</th>
                            <th>Villa</th>
                            <th>0933556677</th>
                            <th>Gate door need fixing</th>
                        </tr>
                        <tr>
                            <th>Abdurehman</th>
                            <th>Villa</th>
                            <th>0933556677</th>
                            <th>Gate door need fixing</th>
                        </tr>
                        <tr>
                            <th>Abdurehman</th>
                            <th>Villa</th>
                            <th>0933556677</th>
                            <th>Gate door need fixing</th>
                        </tr>
                        <tr>
                            <th>Abdurehman</th>
                            <th>Villa</th>
                            <th>0933556677</th>
                            <th>Gate door need fixing</th>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>