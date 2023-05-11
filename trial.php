<?php
// Include the database configuration file  
require '../connection.php'; 

// Get image names from database 
$imageResult = $con->query("SELECT imageName FROM products ORDER BY id ASC");

if ($imageResult->num_rows > 0) {
    // output data of each row
    echo "<ol>";
    while($rows = $imageResult->fetch_assoc()) {
    echo "<li>";
        echo $rows['imageName'] . "<br/>";
    echo "</li>";
    }
    echo "</ol>";
} else {
echo "0 results";
}

?>