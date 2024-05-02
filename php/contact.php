<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:login.php');
}
;

if (isset($_GET['logout'])) {
    unset($user_id);
    session_destroy();
    header('location:login.php');
}
;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../img/Logo.ico">
</head>

<body>
<section id="header">
        <a href="index.php"><img src="../img/logo.png" class="logo" alt="Luxury Watch" width="170"></a>
        <div>
            <ul id="navbar">
                <li> <a class="active" href="index.php">Home</a> </li>
                <li> <a href="cart.php">Cart</a> </li>
                <li> <a href="about.php">About</a> </li>
                <li> <a href="contact.php">Contact</a> </li>
                <li><a href="index.php?logout=<?php echo $user_id; ?>" >Log Out</a></li>
            </ul>
        </div>
    </section>
    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>Get in Touch with us</span>
            <h2>Visit one of our agency locations or contact us today.</h2>
            <h3>Head Office</h3>
            <div>
                <li>
                    <i class="fa-regular fa-map"></i>
                    <p>AlMaadi Sakr Quresh , Egypt.</p>
                </li>
                <li>
                    <i class="fa-regular fa-envelope"></i>
                    <p>easy@freepalastine.com</p>
                </li>
                <li>
                    <i class="fa-solid fa-phone"></i>
                    <p>+0201021852999</p>
                </li>
                <li>
                    <i class="fa-regular fa-clock"></i>
                    <p>Sun - Sat , 11:00 am - 11:00pm</p>
                </li>
            </div>
        </div>
        <div class="banner">
            <img src="../img/contactus1.jpg" width="370">
        </div>
    </section>
    <section id="form-details">
        <form action="">
            <span>LEAVE A MESSAGE</span>
            <h2>We Love to Hear from You</h2>
            <input type="text" placeholder="Your Name">
            <input type="text" placeholder="Your E-Mail">
            <input type="text" placeholder="Subject">
            <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
            <button class="norm">Submit</button>
        </form>
        <div class="people">
            <div>
                <img src="../img/joo.png" alt="">
                <p><span>Youssef Hamdy</span> System Analyst <br>Phone: +20103132345 <br>E-mail:YoussefHamdy@gmail.com
                </p>
            </div>
            <div>
                <img src="../img/zuz.png" alt="">
                <p><span>Ziad Mahmod</span> Front-End Developer <br>Phone: +01021852999 <br>E-mail:mahmodziad2@gmail.com
                </p>
            </div>
            <div>
                <img src="../img/Hanafy.png" alt="">
                <p><span>Mohamed Mahmoud</span> IT Manager <br>Phone: +01147585896 <br>E-mail:MohHanafy@gmail.com</p>
            </div>
            <div>
                <img src="../img/abdullah.png" alt="">
                <p><span>Abdullah-Waleed</span> Back-End Developer <br>Phone: +01231243555
                    <br>E-mail:AbdullahWaleed@gmail.com</p>
            </div>
        </div>

    </section>
    <section id="newsletter" class="section-p1 section-m1">

    </section>
    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="../img/logo.png" alt="" width="190" height="50">
            <h4>Contact</h4>
            <p><strong>Address:</strong>AlMaadi Sakr Quresh , Egypt</p>
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