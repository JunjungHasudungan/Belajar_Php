<?php 

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "app_sekolah";

// create connection
$conn = mysqli_connect($serverName, $userName, $password, $dbName);

// check connection

if(!$conn->connect_error){
    die("connection failed". $conn->connect_error );
}

