<?php include "components/footer.php" ?>
<?php include "components/navbar.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- custom css -->
   
    <link rel="stylesheet" href="css/profile.css">

    <!-- bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- swiper css -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <!--google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto+Slab&display=swap" rel="stylesheet">
    
    <title>BookBae | Profile</title>
</head>
<body>
    <!-- Navbar starts -->
    <?php navbar(""); ?>
    <!-- Navbar ends -->
    
    <!-- Page content starts -->
    <div class="container-fluid header">
        <div class="row">
            <div class="col-md-4  d-flex justify-content-center ">
                <img src="assets\images\profile\dp.png" class="dp" style="width:12rem; height:12rem;">
            </div>
            <div class="col-md-8 m-auto">
                <div class="heading"><p>Welcome Ada shelby </p></div>
                <div class="sub-heading"><P id="sub-heading">Here's where you'll find all your account details as well as your shopping history</p></div>
            </div>
        </div>
    </div>
    <div class="container-fluid components my-5">
        <div class="row">
            <div class="col-md-4 orders m-auto p-4">
                <h4 class="text-center" style="font-weight:bold;">My orders</h4>
                <p class="text-center" style="color:#495057;">Manage your orders and track your last order</p>
                <h5 style="font-weight:bold;">My next delivery</h5>
                <p style="color:#495057;">Tuesday 19th January 2021</p>
                <div class="row align-items-center">
                    <div class="col-sm-6 ">
                        <button class="btn btn-primary mx-auto text-center" type="submit"><i class="bi bi-pin-map p-1"></i>track order</button>
                    </div>
                    <div class="col-sm-6">
                        <a src="orders.php" class="link-to-orders">See all orders</a>
                    </div>
                </div>
                
            </div>
            <div class="col-md-4 justify-content-center orders m-auto">
                <h4>My orders</h4>
                <p>Manage your orders and track your last order</p>
                <h5>My last order</h5>
                <p>Manage your orders and track your last order</p>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/profile.js"></script>
</html>