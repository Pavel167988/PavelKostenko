<?php
include "Flat.php";
include "room.php";


$room1 = new Room(2, 0);
$room2 = new Room(1, 1);
$room1->addhuman();
$room2->addhuman();

$room1->statusroom($room1);
$room2->statusroom($room2);
$room2->doors= 0;
$room1->deletehuman();


$flat = new Flat([$room1, $room2]);

$flat->status ($flat);



?>