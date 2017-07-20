<?php



class Status {
    public $arrmain = [];

    /**
     * Status constructor.
     * @param array $arrmain
     */
    public function __construct(array $arrmain , $route1 , $route2 , $route3 , $station , $time)
    {
        $this->arrmain = $arrmain;
        $this->route1 = $route1;
        $this->route2 = $route2;
        $this->route3 = $route3;
        $this->station = $station;
        $this->time = $time;

    }



    function statusall ($obj){
        echo "<pre>";
        print_r($obj);
        echo "<pre>";
    }

}


$bus = array (10 , 20 , 30);
$route1 = array (1 , 2 , 3 , 4 ,15 ,16 ,21);
$route2 = array (1 ,2 ,3 ,11 ,12 ,13 , 21);
$route3 = array (10 , 20 , 9 , 8, 7 , 17 , 16 , 21);
$time = array (

    "9:00 , 11:30",
    "7:00 , 9:00 , 19:00",
    "12:00 , 10:00 , 16:00",
    "11:00 , 10:15 , 13:45",
    "11:00 , 10:15, 11:00",
    "9:10 , 10:15 , 05:00",
    "9:00 , 10:00 , 13:00",
    "9:00 , 10:00 , 13:00",
    "9:00 , 10:00 , 13:00",
    "9:00 , 10:00 , 13:00",
    "9:00 , 11:35 , 13:00",
    "9:00 , 10:00 , 13:00",
    "9:00 , 10:00 , 13:00",
    "9:00 , 10:00 , 13:00",
    "9:00 , 10:00 , 13:00",
    "9:00 , 10:00 , 13:00",
    "9:00 , 18:30 , 13:00",
    "9:00 , 10:00 , 13:00",
    "9:00 , 10:00 , 13:00",
    "9:00 , 10:00 , 13:00",
    "9:00 , 10:00 , 13:00");
$station = array (1 , 2, 3, 4, 5, 6, 7, 8, 9, 10 , 11 ,12 ,13 ,14 ,15, 16, 17, 18, 19, 20 ,21);
$bus = new Status ( $bus, $route1 , $route2 , $route3 , $station , $time);
$bus->statusall($bus);
echo "<hr>";
echo "<br>";
echo "<br>";
echo "<br>";
include "bus.php";
$bus2 = new Bus (array (10, 20 ,30), $route1 , $route2 , $route3 , $station);
$bus2->selectbus( 10 , $route1 , $route2 , $route3);
echo "<hr>";
echo "<br>";
echo "<br>";
echo "<br>";
$bus2->selectroute(2 , $route1 , $route2 , $route3);
echo "<hr>";
echo "<br>";
echo "<br>";
echo "<br>";
$bus2->selectStation(15, $route1 , $time , $station);
echo "<hr>";
echo "<br>";
echo "<br>";
echo "<br>";
$bus2->selectBus2(2 , array (10, 20 ,30 ) , $route1 , $route2 , $route3);








