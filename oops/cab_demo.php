<?php
include "cab.php";
$cab1= new Cab("linea","sedan");
$cab2= new Cab("i 20","compact");
$cab3= new Cab("eco sports","suv");

$cab1->cab_booking($cust);
$cab2->cab_booking($cust);
$cab3->cab_booking($cust);



?>

