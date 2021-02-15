<?php 

$serverName = "localhost";
$userName = "root";
$database = "app_sekolah";
$password = "";

// create connection 
$conn = mysqli_connect($serverName, $userName, $database, $password);

// check connection
if(!$conn){
    die("Koneksi tidak tersambung.." .mysqli_error());
}
echo "Coneksi sukses..";
mysqli_close();