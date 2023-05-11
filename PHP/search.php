<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../CSS/search.css">
    <link rel="shortcut icon" href="../images/game.jpg" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Montez&family=Poppins&family=Tilt+Prism&display=swap" rel="stylesheet">
</head>
<body>
    <!-- nav section -->
    <nav>
        <a href="../HTML/home.html"><img src="../images/weblogo.jpg" alt="go-to-home_logo"></a>
        <ul>
            <li><a href="./products.php"> Products</a></li>
            <li id="search-link"><a href="./search.php">Search</a></li>
            <li><a href="./order.php">Order</a></li>
            <li><a href="../HTML/about-us.html">About Us</a></li>
            <li><a href="../HTML/contact-us.html">Contact Us</a></li>
            <li><a href="../HTML/useful-links.html">Useful Links</a></li>
        </ul>
    </nav>

    <section class="search">
        <form action="search.php" method="post" enctype="multipart/form-data">
            <input type="text" placeholder="Search for your favourite game..." name="search" required>
            <input type="submit" name="submit" value="Search">
        </form>
    </section>

    <?php

    $status = $statusMsg = '';

    if(isset($_POST["submit"])){
        $status = 'error'; 
        $search = $_POST['search'];

        if (!empty($search)) {
            // Include the database configuration file  
            require_once './connection.php'; 
    
            // $sql = "select * from products where imageName like '%$search%'";
            $sql = "SELECT * FROM products WHERE imageName LIKE '%$search%'";
    
            $result = $con->query($sql);
    
    
            if($result->num_rows > 0) { ?> 
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
                <p class="status-error">Sorry! Your search doesn't match any game in our store...</p> 
            <?php
            }
        } else {
            $statusMsg = 'Please search for a game...'; 
        }
    }

    ?>

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


    <style>
        <?php include "../CSS/search.css" ?>
    </style>

</body>
</html>