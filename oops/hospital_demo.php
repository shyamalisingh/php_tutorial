<?php
include "hospital.php";
include "patient.php";
$hospital1=new Hospital();

$patient1=new Patient("shammi",23,"23/12/2017");
$patient2=new Patient("xxxx",23,"23/12/2017");
$patient3=new Patient("yyyyy",23,"23/12/2017");
$patient4=new Patient("zzzzz",23,"23/12/2017");

$hospital1->add_patient($patient1);
$hospital1->add_patient($patient2);
$hospital1->add_patient($patient3);
$hospital1->add_patient($patient4);
$hospital1->show_patient();


?>


