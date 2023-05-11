<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "iam_mosco98";
$dbname = "webdevassignment";
$dbtable = "users_orders";


$connect = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($connect -> connect_error){
    die("ERROR: Could not connect." . $connect->connect_error);
}

?>