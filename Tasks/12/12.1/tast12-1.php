<?php
include "Flat.php";
include "room.php";


$room = new Room(2, 4,  false);
$room->addhuman();
$room->addhuman();



$flat = new Flat($room);
$flat->addrooms($room);
$flat->addrooms($room);
$flat->deleterooms();
$flat->status ($flat);



?>