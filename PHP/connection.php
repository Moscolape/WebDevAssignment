<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "iam_mosco98";
$dbname = "webdevassignment";
$dbtable = "products";


$con = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($con -> connect_error){
    die("ERROR: Could not connect." . $con->connect_error);
}

?>