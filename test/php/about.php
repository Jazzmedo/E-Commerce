<?php
session_start();

include("config.php");
if (!isset($_SESSION['valid'])) {
    header("Location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../img/Logo.ico">
</head>

<body>
    <section id="header">
        <a href="#"><img src="../img/logo.png" class="logo" alt="LuxuryWatches" width="170"></a>

        <div>
            <ul id="navbar">
                <li> <a href="index.php">Home</a> </li>
                <li> <a class="active" href="about.php">About</a> </li>
                <li> <a href="contact.php">Contact</a> </li>
                <li> <a href="logout.php">Log Out</a> </li>
            </ul>
        </div>

    </section>

    <section id="about-head" class="section-p1">
        <img src="../img/129.jpg" alt="">
        <div>
            <h2>Who Are We?</h2>
            <p>We are computer science students studying at Modern Academy in Maadi. We built this website to gain more
                experience in our field. Although it has been a challenging project alongside our studies, every minute
                invested has been worthwhile. Additionally, we have improved our teamwork skills; helping each other in
                constructing this website has been an exciting and fulfilling experience.</p>


        </div>
    </section>


    <section id="newsletter" class="section-p1 section-m1">
    </section>
    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="../img/logo.png" alt="" width="190" height="50">
            <h4>Contact</h4>
            <p><strong>Address:</strong> AlMaadi Sakr Quresh , Egypt</p>
            <p><strong>Phone:</strong> +20102185299 / (+91) 01 3214 8963</p>
            <p><strong>Hours:</strong> 10:00 - 22:00,Mon-Sun </p>
            <div class="follow">
                <h4>Follow Us</h4>
                <div class="icon">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-x-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-youtube"></i>
                    <i class="fa-brands fa-threads"></i>
                </div>
            </div>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="#">About Us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact Us</a>

        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>

        </div>

        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google play</p>
            <div class="row">
                <img src="../img/app.jpg" alt="">
                <img src="../img/play.jpg" alt="">
            </div>
            <p>Secured Payment Gateways</p>
            <img src="../img/pay.png" alt="">
        </div>
        <div class="copyright">
            <p>@ 2023, Luxury Watchs.com All Rights Reserved.</p>
        </div>
    </footer>
</body>

</html>