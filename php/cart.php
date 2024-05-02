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
if (isset($_POST['test'])) {
    $message[] = 'the cart will be shipped soon!';
    mysqli_query($conn, "DELETE FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
}
;

if (isset($_POST['add_to_cart'])) {

    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = $_POST['product_quantity'];

    $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

    if (mysqli_num_rows($select_cart) > 0) {
        $message[] = 'product already added to cart!';
    } else {
        mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, image, quantity) VALUES('$user_id', '$product_name', '$product_price', '$product_image', '$product_quantity')") or die('query failed');
        $message[] = 'product added to cart!';
    }

}
;

if (isset($_POST['update_cart'])) {
    $update_quantity = $_POST['cart_quantity'];
    $update_id = $_POST['cart_id'];
    mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_quantity' WHERE id = '$update_id'") or die('query failed');
    $message[] = 'cart quantity updated successfully!';
}

if (isset($_GET['remove'])) {
    $remove_id = $_GET['remove'];
    mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'") or die('query failed');
    header('location:cart.php');
}

if (isset($_GET['delete_all'])) {
    mysqli_query($conn, "DELETE FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
    header('location:cart.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/cart.css">
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
    <div class="container">


        <div class="shopping-cart">
            <table>
                <thead>
                    <th>image</th>
                    <th>name</th>
                    <th>price</th>
                    <th>quantity</th>
                    <th>total price</th>
                    <th>action</th>
                </thead>
                <tbody>
                    <?php
                    $cart_query = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
                    $grand_total = 0;
                    if (mysqli_num_rows($cart_query) > 0) {
                        while ($fetch_cart = mysqli_fetch_assoc($cart_query)) {
                            ?>
                            <tr>
                                <td><img src="../img/<?php echo $fetch_cart['image']; ?>" height="100" alt=""></td>
                                <td><?php echo $fetch_cart['name']; ?></td>
                                <td>$<?php echo $fetch_cart['price']; ?></td>
                                <td>
                                    <form action="" method="post">
                                        <input type="hidden" name="cart_id" value="<?php echo $fetch_cart['id']; ?>">
                                        <input type="number" min="1" name="cart_quantity"
                                            value="<?php echo $fetch_cart['quantity']; ?>">
                                        <input type="submit" name="update_cart" value="update" class="option-btn">
                                    </form>
                                </td>
                                <td>$<?php echo $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']); ?></td>
                                <td><a href="cart.php?remove=<?php echo $fetch_cart['id']; ?>" class="delete-btn"
                                        >remove</a></td>
                            </tr>
                            <?php
                            $grand_total += $sub_total;
                        }
                    } else {
                        echo '<tr><td style="padding:20px; text-transform:capitalize;" colspan="6">no item added</td></tr>';
                    }
                    ?>
                    <tr class="table-bottom">
                        <td colspan="4">Grand Total :</td>
                        <td>$<?php echo $grand_total; ?></td>
                        <td><a href="cart.php?delete_all" 
                                class="delete-btn <?php echo ($grand_total > 1) ? '' : 'disabled'; ?>">delete all</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <center>

            <div class="cart-btn">
                <form method="post">
                    <input class="btn <?php echo ($grand_total > 1) ? '' : 'disabled'; ?>" type="submit" name="test"
                    value="Proceed to Checkout">
                </form>
            </div>
        </center>
        <center>
        <?php
            if (isset($message)) {
                foreach ($message as $message) {
                    echo '<div id="message" style="    position: sticky;
            top: 0;
            left: 0;
            right: 0;
            padding: 15px 10px 0px 10px ;
            text-align: center;
            z-index: 1000;
            color: var(--black);
            font-size: 20px;
            text-transform: capitalize;
            cursor: pointer;" onclick="this.remove();">' . $message . '</div>';
                }
            }
            ?>

        </center>
    </div>

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