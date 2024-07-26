<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/user_list.css">
    <link rel="stylesheet" href="../styles/general_style.css">
    <link rel="stylesheet" href="../../../../../assets//icons/fontawesome-free-6.5.1-web/css/all.css">
    <title>Users</title>
</head>

<body>
    <div class="admin-dashboard-container">
        <div class="admin-dashboard-container-left-container">
            <img loading="lazy" src="../../../../../assets//images/logo2.png" alt="" height="80px"
                class="side-bar-image">
            <!-- <div class="dashboard-button">
                <icon class="fa fa-diamond"></icon>
                <span class="btn-label">Over view</span>
            </div> -->
            <a href="./user_list.html"  class="dashboard-button">
                <icon class="fa fa-users"></icon>
                <span class="btn-label">Tenants</span>
            </a>
            <a href="./payment.php" id="users" class="dashboard-button">
                <icon class="fa fa-exchange"></icon>
                <span class="btn-label">Payment</span>
            </a>
            <a href="./repair_page.html" class="dashboard-button">
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
                <h2 class="dashboard-header-title">Payment</h2>
                <a href="../../home_page.php">Home</a>
            </div>
            <div class="admin-dashboard-container-right-bottom-container">
                <div class="wrapper">
                    <table class="user-table-container">
                        <caption class="table-caption">Payment List</caption>
                        <tr class="user-table-header">
                            <th>Property</th>
                            <th>Price</th>
                            <th>Duration</th>
                            <th>Status</th>
                        </tr> 
                        <tr>
                        <th>
                        <img 
                         width="50px"
                         height="50px"
                        src="../../../../../assets//images//property-1.jpg" alt="">
                            house 1</th>
                            <th>20,000</th>
                            <th>one Month</th>
                            <th>Paid</th>
                        </tr>
                    <tr>
                        <th>
                            <img width="50px" height="50px" src="../../../../../assets//images//property-1.jpg" alt="">
                            house 1
                        </th>
                        <th>20,000</th>
                        <th>one Month</th>
                        <th>Paid</th>
                    </tr>
                    <tr>
                        <th>
                            <img width="50px" height="50px" src="../../../../../assets//images//property-1.jpg" alt="">
                            house 1
                        </th>
                        <th>20,000</th>
                        <th>one Month</th>
                        <th>Paid</th>
                    </tr>
                    <tr>
                        <th>
                            <img width="50px" height="50px" src="../../../../../assets//images//property-1.jpg" alt="">
                            house 1
                        </th>
                        <th>20,000</th>
                        <th>one Month</th>
                        <th>Paid</th>
                    </tr>
                   
                </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>