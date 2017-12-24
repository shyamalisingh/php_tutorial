<?php
include "cab.php";
include "cust.php";
$cust= new Customer("shyamali",26);
$cust->address="powai";
$cust->ptint_custinfo();

$cab1= new Cab("linea","sedan");
$cab2= new Cab("i 20","compact");
$cab3= new Cab("eco sports","suv");

$cab1->cab_booking($cust);
$cab2->cab_booking($cust);
$cab3->cab_booking($cust);



?>

