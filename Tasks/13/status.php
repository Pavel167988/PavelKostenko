<?php



class Status {
    public $arrmain = [];

    /**
     * Status constructor.
     * @param array $arrmain
     */
    public function __construct(array $arrmain , $route1 , $route1r, $route2 , $route2r, $route3 , $route3r, $station , $time)
    {
        $this->arrmain = $arrmain;
        $this->route1 = $route1;
        $this->route2 = $route2;
        $this->route3 = $route3;
        $this->route1r = $route1r;
        $this->route2r = $route2r;
        $this->route3r = $route3r;
        $this->station = $station;
        $this->time = $time;


    }



    function statusall ($obj){
        echo "<pre>";
        print_r($obj);
        echo "<pre>";
    }

}


$bus = array (1 , 5 , 6);
$route1 = array ("Фолюш", "1000 мелочей", "Октябрь", "Филармония", "Корона", "Брест", "Тринити", "Кабяка");
$route2 = array ("Тропа здоровья", "Форты", "Роддом", "Красное знамя", "Ленина", "Табачка", "Суворова");
$route3 = array ("Девятовка", "Олдсити", "Пушкина", "Центр-занятости", "Советская", "Тропа здоровья", "Корона");
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
$station = array ("Фолюш" , "1000 мелочей", "Октябрь", "Филормония", "Корона", "Брест", "Тринити", "Кабяка", "Тропа здоровья", "Форты" , "Роддом" ,"Красное знамя" ,"Ленина" ,"Табачная фабрика" ,"Суворова", "Девятовка", "Олдсити", "Пушкина", "Центр занятости", "Советская");
$station2 = array (4.4 , 1.7 , 1);
$bus = new Status ( $bus, $route1 , array_reverse($route1), $route2 ,array_reverse($route2), $route3 ,array_reverse($route3), $station , $time);
$bus->statusall($bus);
echo "<hr>";
echo "<br>";
echo "<br>";
echo "<br>";
include "bus.php";
$bus2 = new Bus (array (1, 5 ,6), $route1 , $route2 , $route3 , $station);
$bus2->selectbus( 5 , $route1 , $route2 , $route3);
echo "<hr>";
echo "<br>";
echo "<br>";
echo "<br>";
$bus2->selectroute(2 , $route1 , $route2 , $route3);
echo "<hr>";
echo "<br>";
echo "<br>";
echo "<br>";
$bus2->selectStation("Корона", $route1 , $time , $station);
echo "<hr>";
echo "<br>";
echo "<br>";
echo "<br>";
$bus2->selectBus2("Кабяка" , array (1, 5 ,6 ) , $route1 , $route2 , $route3);











