<?php
    session_start();

    if(isset($_SESSION['Admin']))
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../CSS/order.css">
    <link rel="shortcut icon" href="../images/game.jpg" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Montez&family=Poppins&family=Tilt+Prism&display=swap" rel="stylesheet">
</head>
<body>
    <!-- nav section -->
    <nav>
        <a href="../HTML/home.html"><img src="../images/weblogo.jpg" alt="go-to-home_logo"></a>
        <ul>
            <li><a href="./products.php"> Products</a></li>
            <li><a href="./search.php">Search</a></li>
            <li id="order-link"><a href="./order.php">Order</a></li>
            <li><a href="../HTML/about-us.html">About Us</a></li>
            <li><a href="../HTML/contact-us.html">Contact Us</a></li>
            <li><a href="../HTML/useful-links.html">Useful Links</a></li>
        </ul>
    </nav>

    <section class='admin-block'>
        <h1>Users' Catalogue</h1>
            <?php 
            // Include the database configuration file  
            require './connection2.php'; 
            
            // Get users from database 
            $result = $connect->query("SELECT username, createdAt, orders FROM users_orders WHERE NOT role='Admin' ORDER BY id ASC"); 
            ?>

            <!-- Display image on the page -->
            <?php if($result->num_rows > 0) { ?> 
                <div class='gallery'> 
                    <?php while ($row = $result->fetch_assoc()) { ?> 
                        <div>
                            <div class= 'customers'>
                                <p><b>Name of customer:</b> <?php echo $row['username']?></p>
                                <p><b>User registered on:</b> <?php echo $row['createdAt']?></p>
                                <p><b>User's last order:</b> <?php echo $row['orders']?></p>
                            </div>
                        </div>
                        <?php } ?> 
                </div> 
            <?php

            } else { ?> 
                <p class="status error">Product(s) not found...</p> 
            <?php
            }

            ?>
        

            <style>
                <?php include "../CSS/order.css" ?>
            </style>
    </section>

    <footer>
        <a href="../HTML/home.html"><img src="../images/weblogo.jpg" alt="go-to-home_logo"></a>
        <ul>
            <li><a href="./products.php"> Products</a></li>
            <li><a href="./search.php">Search</a></li>
            <li><a href="./order.php">Order</a></li>
            <li><a href="../HTML/about-us.html">About Us</a></li>
            <li><a href="../HTML/contact-us.html">Contact Us</a></li>
            <li><a href="../HTML/useful-links.html">Useful Links</a></li>
        </ul>
    </footer>

    <script src="../JS/order.js"></script>
</body>
</html>