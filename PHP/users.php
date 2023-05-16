<?php
    session_start();

    if(isset($_SESSION['User'], $_SESSION['Orders']))
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

    <section>
        <main id="sidebar">
            <h1>Welcome, <?php echo $_SESSION['User']; ?></h1>
            <p><i id='any'>No new orders yet!</i></p>
            <form action="./place-order.php" method="post">
                <input type="text" name='unames' id='hide' value='<?php echo $_SESSION['User']; ?>'>
                <textarea name="orders" id="user-order" cols="30" rows="10" value='mean'></textarea>
                <input type="submit" name="btnPost" value="Place order" id='place' />
            </form>
            <p><b>Last order:</b> <i><?php echo $_SESSION['Orders']; ?></i></p>
        </main>
        <main class='side'>
            <div class="begin">
                <h1>Make Purchases!!</h1>
                <p>Our games are not only fun to play, they appeal to the interest of true gamers. For a low price, you can place your order and our store would deliver it to your doorstep &#128513;</p>
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
                            <div class='order-product'>
                                <p class="order-name"><?php echo $row['imageName']?></p>
                            </div>
                        </div>
                        <?php } ?> 
                </div> 
                <button id='btn1' title='The Way of Water Adventure Game'>Add</button>
                <button id='btn2' title='The Moon Gang Adventure Game'>Add</button>
                <button id='btn3' title='The Adventures of Jack Potter Game'>Add</button>
                <button id='btn4' title='God of War Adventure Game'>Add</button>
                <button id='btn5' title='Elite Combat Adventure Game'>Add</button>
                <button id='btn6' title='Dark Knight Adventure Game'>Add</button>
                <button id='btn7' title='Scrabble Board Game'>Add</button>
                <button id='btn8' title='Monopoly Board Game'>Add</button>
                <button id='btn9' title='Ludo Board Game'>Add</button>
                <button id='btn10' title='Chess Board Game'>Add</button>
                <button id='btn11' title='Checkers Board Game'>Add</button>
                <button id='btn12' title='Ultimate Car Racing Game'>Add</button>
                <button id='btn13' title='Need for Speed Car Racing Game'>Add</button>
                <button id='btn14' title='Highway Racer Game'>Add</button>
                <button id='btn15' title='GT 2 Racing Game'>Add</button>
                <button id='btn16' title='Forza Horizon 5 Car Racing Game'>Add</button>
                <button id='btn17' title='Extreme Car Racing Game'>Add</button>
                <button id='btn18' title='City Racing Game'>Add</button>
                <button id='btn19' title='Asphalt 9 Car Racing Game'>Add</button>
                <button id='btn20' title='Asphalt 8 Car Racing Game'>Add</button>
                <button id='btn21' title='Score Hero Game'>Add</button>
                <button id='btn22' title='Dream League Soccer 2023 Game'>Add</button>
                <button id='btn23' title='FIFA 2019 Game'>Add</button>
                <button id='btn24' title='Real Football 2019 Game'>Add</button>
                <button id='btn25' title='PES 2018 Game'>Add</button>
                <button id='btn26' title='Football Manager 2023 Game'>Add</button>
                <button id='btn27' title='Uncharted Action Game'>Add</button>
                <button id='btn28' title='Spiderman Action Game'>Add</button>
                <button id='btn29' title='Sky Force Reloaded Action Game'>Add</button>
                <button id='btn30' title='Shadow Legends Action Game'>Add</button>
                <button id='btn31' title='Resident Evil Action Game'>Add</button>
                <button id='btn32' title='The Crew Challenge Action Game'>Add</button>
                <button id='btn33' title='Modern Combat Action Game'>Add</button>
                <button id='btn34' title='Eternium Action Game'>Add</button>
                <button id='btn35' title='Devil May Cry Action Game'>Add</button>
                <button id='btn36' title='Bayonnetta Action Game'>Add</button>
            <?php

            } else { ?> 
                <p class="status error">Product(s) not found...</p> 
            <?php
            }

            ?>


            <style>
                <?php include "../CSS/order.css" ?>
            </style>
        </main>
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