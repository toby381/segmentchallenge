<?php
ini_set('max_execution_time', 300);
include "functions.php";
global $local; // ligger i functions

global $root_url;

//error_reporting(E_ERROR | E_WARNING | E_PARSE);
//error_reporting(0);

if(!$local) {
    $servername = "31.24.132.140";
    $username = "c1_sc_admin";
    $password = "Stallerud381";
    $dbname = "c1sc";
    $root_url = "/";
} else {
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "c1sc";
    $root_url = "/segmentchallenge/";
    
}

// Create connection
global $conn;
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";

?>