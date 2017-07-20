<?php
class Bus {
    public $arrbus = [];

    /**
     * Bus constructor.
     * @param array $arrbus
     */
    public function __construct(array $arrbus, $route , $station)
    {
        $this->arrbus = $arrbus;
        $this->route = $route;
        $this->station = $station;
    }







    function selectbus ($num ,$route1 , $route2, $route3)
    {
        if ($num == 10) {
            echo "На автобус №: ".$num." данный мартшрут: ";
            echo "<pre>";
            print_r($route1);
            echo "<pre>";
        }

        elseif ($num == 20) {
            echo "На автобус №: ".$num." данный мартшрут: ";
            echo "<pre>";
            print_r($route2);
            echo "<pre>";
        }
        elseif ($num == 30){
            echo "На автобус №: ".$num." данный мартшрут: ";
            echo "<pre>";
            print_r($route3);
            echo "<pre>";
        }

        else {
            echo "Данного автобуса нет";
        }

    }
    function selectroute($num, $route1, $route2, $route3)
    {
        if ($num == 1) {
            echo "<pre>";
            print_r($route1);
            echo "<pre>";
        } elseif ($num == 2) {
            echo "<pre>";
            print_r($route2);
            echo "<pre>";
        } elseif ($num == 3) {
            echo "<pre>";
            print_r($route3);
            echo "<pre>";
        } else {
            echo "Нет данного мартшрута";
        }


    }
    function selectStation($num, $route1, $arr , $station)
    {
        $key2 = array_search($num, $station);
        echo "Время приьбытия автобуса на остановку под № ".$num;
        echo "<pre>";
        print_r(array_slice($arr, $key2, true));
        print_r($route1);
        echo "<pre>";
    }


    function selectBus2($num, $arrbus, $route1, $route2, $route3)
    {
        foreach ($route1 as $elem) {
            if (($elem == $num) == true) {
                echo "Автобус под № :";
                echo "<pre>";
                print_r($arrbus[0]);
                echo "<pre>";



            }
        }
        foreach ($route2 as $elem2) {
            if (($elem2 == $num) == true) {
                echo "Автобус под № :";
                echo "<pre>";
                print_r($arrbus[1]);
                echo "<pre>";



            }
        }
        foreach ($route3 as $elem3) {
            if (($elem3 == $num) == true) {
                echo "Автобус под № :";
                echo "<pre>";
                print_r($arrbus[2]);
                echo "<pre>";


            }
        }




    }












}

