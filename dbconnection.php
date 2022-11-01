<?php

$DATABASE_HOST = "localhost";
$DATABASE_USER = "root";
$DATABASE_PASS = "";
$DATABASE_NAME = "sgp";


$conn = new mysqli($DATABASE_HOST,$DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
 
// Check connection
if ($conn->connect_error) {

    die("Connection failed: ". $conn->connect_error);

}else{

    //echo "DB connection established<br>";

}
