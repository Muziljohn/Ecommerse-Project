
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Order History | SyedSense Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid" id="content">
        <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
       
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index-log.php">SyedSense Store</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <!--If user is logged in, then header will contain these-->
                
                <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                <li><a href="settings.php"><span class="glyphicon glyphicon-user"></span> Settings</a></li>
                <li><a href="orderhistory.php"><span class="glyphicon glyphicon-file"></span> Order History</a></li>
                <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
            </ul>
        </div>
    </div>
</div>
            <div class="col-lg-4 col-md-6 ">
                    <img src="img/cart.jpg" style="float: left;">
                </div>
            <div class="row decor_bg">
                <div class="col-md-6">
                    <table class="table table-striped">
    
                        
                        
                            <h1 style="margin-bottom: 20px; font-weight: 20;"><center>Order History</center></h1>
                            <thead>
                                <tr>
                                    <th>Item name</th>
                                    <th>Price</th>
                                    <th>Order & time</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                                <tr class="text-center"><td colspan="3">You have not placed any orders</td></tr>
                            </tbody>
                           
                    </table>
                </div>
            </div>
        </div>
        <?php include("includes/footer.php"); ?>
    </body>
</html>