<?php 

use User\User;
use Product\Product;

// call our file
include 'User.php';
include 'Product.php';


// print our class
$user = new User; // call User class from User file
echo "<br>";
$product = new \User; // calll User class from Product file