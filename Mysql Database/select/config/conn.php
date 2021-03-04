<?php 

$mysql =  new mysqli("localhost", "root", "", "motorcycleshop");

if($mysql == false) // validate
    {
    die(" ERROR: Could not connect".$mysql->connect_error);   
    }