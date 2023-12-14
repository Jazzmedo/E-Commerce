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
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../img/Logo.ico">
</head>
<br>
<section id="header">
    <a href="index.php"><img src="../img/logo.png" class="logo" alt="Luxury Watch" width="170"></a>
    <div>
        <ul id="navbar">
            <li> <a class="active" href="index.php">Home</a> </li>
            <li> <a href="about.php">About</a> </li>
            <li> <a href="contact.php">Contact</a> </li>
            <li> <a href="logout.php">Log Out</a> </li>
        </ul>
    </div>
</section>
<section id="rolex">
</section>
<br>
<br>
<section class="section-p1 Product1">
    <h2>Featured Products</h2>
    <div class="pro_container">
        <a href="sproduct.php " style="text-decoration: none;">

            <div class="pro" for="abba">
                <img src="../img/watch.jpg" alt="">
                <div class="des">
                    <span>Watch</span>
                    <h5>Rolex Oyster Perpetual</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$25000.00</h4>
                </div>
                <a href="sproduct.php"><i class="fa-solid fa-bag-shopping cart2"></i></a>
            </div>
        </a>
        <a href="sproduct2.php" style="text-decoration: none;">
            <div class="pro">
                <img src="../img/watch2.jpg" alt="">
                <div class="des">
                    <span>Watch</span>
                    <h5>Rolex Cosmograph Daytona</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$30000.00</h4>
                </div>
                <a href="sproduct2.php"><i class="fa-solid fa-bag-shopping cart2"></i></a>

            </div>
        </a>
        <a href="sproduct3.php" style="text-decoration: none;">
            <div class="pro">
                <img src="../img/watch3.jpg" alt="">
                <div class="des">
                    <span>Watch</span>
                    <h5>Rolex Yachtmaster</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$20000.00</h4>
                </div>
                <a href="sproduct3.php"><i class="fa-solid fa-bag-shopping cart2"></i></a>

            </div>
        </a>
        <a href="sproduct4.php" style="text-decoration: none;">
            <div class="pro">
                <img src="../img/watch4.jpg" alt="">
                <div class="des">
                    <span>Watch</span>
                    <h5>Rolex GMT-Master II </h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>

                    </div>
                    <h4>$30000.00</h4>
                </div>
                <a href="sproduct4.php"><i class="fa-solid fa-bag-shopping cart2"></i></a>

            </div>
        </a>
        <a href="sproduct5.php" style="text-decoration: none;">
            <div class="pro">
                <img src="../img/watch5.jpg" alt="">
                <div class="des">
                    <span>Watch</span>
                    <h5>Rolex Tudor Heritage Black</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$40000.00</h4>
                </div>
                <a href="sproduct5.php"><i class="fa-solid fa-bag-shopping cart2"></i></a>

            </div>
        </a>
        <a href="sproduct6.php" style="text-decoration: none;">
            <div class="pro">
                <img src="../img/watch6.jpg" alt="">
                <div class="des">
                    <span>Watch</span>
                    <h5>Rolex Submariner Golden </h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$35000.00</h4>
                </div>
                <a href="sproduct6.php"><i class="fa-solid fa-bag-shopping cart2"></i></a>

            </div>
        </a>
        <a href="sproduct7.php" style="text-decoration: none;">
            <div class="pro">
                <img src="../img/watch7.jpg" alt="">
                <div class="des">
                    <span>Watch</span>
                    <h5>Rolex Sea-Dweller</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>

                    </div>
                    <h4>$25000.00</h4>
                </div>
                <a href="sproduct7.php"><i class="fa-solid fa-bag-shopping cart2"></i></a>

            </div>
        </a>
        <a href="sproduct8.php" style="text-decoration: none;">
            <div class="pro">
                <img src="../img/watch9.jpg" alt="">
                <div class="des">
                    <span>Watch</span>
                    <h5>Rolex Archetypal Dive Watch</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$80000.00</h4>
                </div>
                <a href="sproduct8.php"><i class="fa-solid fa-bag-shopping cart2"></i></a>
            </div>
        </a>
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