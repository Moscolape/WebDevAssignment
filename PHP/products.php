<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../CSS/products.css">
    <link rel="shortcut icon" href="../images/game.jpg" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Montez&family=Poppins&family=Tilt+Prism&display=swap" rel="stylesheet">
</head>
<body>
    <!-- nav section -->
    <nav>
        <a href="../HTML/home.html"><img src="../images/weblogo.jpg" alt="go-to-home_logo"></a>
        <ul>
            <li id="products-link"><a href="./products.php"> Products</a></li>
            <li><a href="./search.php">Search</a></li>
            <li><a href="./order.php">Order</a></li>
            <li><a href="../HTML/about-us.html">About Us</a></li>
            <li><a href="../HTML/contact-us.html">Contact Us</a></li>
            <li><a href="../HTML/useful-links.html">Useful Links</a></li>
        </ul>
    </nav>

    <section>
        <main id="sidebar">
            <h1>Game Categories</h1>
            <div>
                <p id='adventure' onclick="scrollToAdventure()"> ➧ Adventure Games</p>
                <p id='board' onclick="scrollToBoard()"> ➧ Board Games</p>
                <p id='car-racing' onclick="scrollToRacing()"> ➧ Car Racing Games</p>
                <p id='soccer' onclick="scrollToSoccer()"> ➧ Soccer Games</p>
                <p id='action' onclick="scrollToAction()"> ➧ Action Games</p>
            </div>
        </main>
        <main id='products'>
            <div class='products-info'>
                <h3>Here at Light Studio, we adapt to customer preferences and sell only the best and most popular games.
                </h3>
                <p>Ranging from action-packed games to your favourite board games down to the most thrilling adventure games and exciting sports games, we've got everything you'd want here in our store. Curated below is a presentation of some of these games;</p>
            </div>

            <?php 
            // Include the database configuration file  
            require './connection.php'; 
            
            // Get image data from database 
            $result = $con->query("SELECT image, imageName FROM products ORDER BY id DESC"); 
            ?>

            <!-- Display image on the page -->
            <?php if($result->num_rows > 0) { ?> 
                <div class="gallery"> 
                    <?php while ($row = $result->fetch_assoc()) { ?> 
                        <div>
                            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" id="db-image" />
                            <p><?php echo $row['imageName']?></p>
                        </div>
                    <?php } ?> 
                </div> 
            <?php

            } else { ?> 
                <p class="status error">Image(s) not found...</p> 
            <?php
            }

            ?>

            <style>
                <?php include "../CSS/products.css" ?>
            </style>
        </main>
    </section>

    <footer>
        <a href="../HTML/home.html"><img src="../images/weblogo.jpg" alt="go-to-home_logo"></a>
        <ul>
            <li><a href="../PHP/products.php"> Products</a></li>
            <li><a href="../PHP/search.php">Search</a></li>
            <li><a href="../PHP/order.php">Order</a></li>
            <li><a href="../HTML/about-us.html">About Us</a></li>
            <li><a href="../HTML/contact-us.html">Contact Us</a></li>
            <li><a href="../HTML/useful-links.html">Useful Links</a></li>
        </ul>
    </footer>
    
    <script src="../JS/products.js"></script>
</body>
</html>