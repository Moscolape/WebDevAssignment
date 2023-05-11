<?php

session_start();

include "../WebDevAssignment-php/PHP/connection2.php";

// if(isset($_SESSION['User']))
    if(isset($_POST['btnPost'])) {
        $orderIt = $_POST['orders'];
        $username = $_POST['unames'];

    
        $query = "UPDATE $dbtable SET orders='$orderIt', username='$username' WHERE username = '$username'";

        mysqli_query($connect, $query);
        
        mysqli_close($connect);

        echo "<p><i>Your order has been placed successfully!</i></p>";

    }

?>