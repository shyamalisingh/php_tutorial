<?php

include "phone.php";
include "feature_phone.php";
$phone= new Phone("s6","samsung");
$phone->dialing("9022698102");
$phone->print_info();
$feature_phone= new Feature_Phone("nokia1100","nokia","model_number1111");
$feature_phone->dialing("8884895641");
$feature_phone->print_info();

?>