<?php
include "bus.php";
include "station.php";
include "route.php";


$route1 = new Route ([1 , 2 , 3 , 4 ,15 ,16 ,21]);
$route2 = new Route ([1 ,2 ,3 ,11 ,12 ,13 , 21]);
$route3 = new Route ([10 , 20 , 9 , 8, 7 , 17 , 16 , 21]);
$route1->statusRoute($route1);
$route2->statusRoute($route2);
$route3->statusRoute($route3);








$station = new Station ([1 , 2, 3, 4, 5, 6, 7, 8, 9, 10 , 11 ,12 ,13 ,14 ,15, 16, 17, 18, 19, 20 ,21]);
$station->statusStation($station);


$bus = new Bus (array (10 , 20 , 30) , [$route1 , $route2 , $route3]);
$bus->selectbus( 10 , $route1 , $route2 , $route3);

$stationRoute = new Station ([1 , 2, 3, 4, 5, 6, 7, 8, 9, 10 , 11 ,12 ,13 ,14 ,15, 16, 17, 18, 19, 20 ,21]);
$stationRoute->selectroute(2 , $route1 , $route2 , $route3);



