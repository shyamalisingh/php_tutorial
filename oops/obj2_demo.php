
<?php
include "member.php";
$member1=new Member;

$member1->name="shammi";
$member1->age=26;
$member1->phoneNumber="8884895641";
$member1->member_details();
echo "<br/>";
$member2= new Member;
$member2->name="akhi";
$member2->age=30;
$member2->phoneNumber="9769132490";
$member2->member_details();
echo "<br>";
$member3= new Member;
$member3->name="akhilesh";
$member3->age=30;
$member3->phoneNumber="9769132490";
$member3->member_details();

?>
