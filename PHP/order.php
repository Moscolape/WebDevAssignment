<?php

// session_start();

    include "./connection2.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['uname'];
        $password = $_POST['upass'];

        // $queried = SELECT * FROM users_orders WHERE username = $username;
        $queried = "SELECT * FROM users_orders WHERE username = '$username' OR password = '$password'";
        $results = mysqli_query($connect, $queried);
        $rows = mysqli_num_rows($results);

        if($rows === 0) {
            $query = "INSERT INTO $dbtable (username, password ) VALUES ('$username', '$password')";
    
    
            mysqli_query($connect, $query);
            
            mysqli_close($connect);
    
            echo
            "
            <script>
                alert('Your account has been registered successfully! You may now sign in!');
            </script>
            ";
        } else {
            echo
            "
            <script>
                alert('Sorry! Username or password already exists for another user');
            </script>
            ";
        }
    }

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

    <section id='forms'>
        <form action="" method="post" id='sign-up'>
            <h1>Sign Up</h1>
            <div>
                <label for="username">Username</label><br>
                <input type="text" name='uname' placeholder='Enter your username' required>
            </div>
            <div>
                <label for="password">Password</label><br>
                <input type="password" name='upass' placeholder='Enter your password' required>
            </div>
            <input type="submit" title='Sign-up' id='signed' value='Sign Up'/>
        </form>
        <form action="./login.php" method="post" id='sign-in'>
            <h1>Sign In</h1>
            <div>
                <label for="username">Username</label><br>
                <input type="text" id='user' name='username' placeholder='Enter your username' required>
            </div>
            <div>
                <label for="password">Password</label><br>
                <input type="password" id='word' name='password' placeholder='Enter your password' required>
            </div>
            <input type="submit" name='btnLogin' title='Login' id='login' value='Log In'/>
        </form>
    </section>

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