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







    function selectbus ($name ,$route1 , $route2, $route3)
    {
        if ($name == 1) {
            echo "На автобус №: ".$name." данный мартшрут: ";
            echo "<pre>";
            print_r($route1);
            echo "<pre>";
        }

        elseif ($name == 5) {
            echo "На автобус №: ".$name." данный мартшрут: ";
            echo "<pre>";
            print_r($route2);
            echo "<pre>";
        }
        elseif ($name == 6){
            echo "На автобус №: ".$name." данный мартшрут: ";
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
    function selectStation($name, $route1, $arr , $station)
    {
        $key2 = array_search($name, $station);
        echo "Время прибытия автобуса на остановку: ".$name;
        echo "<pre>";
        print_r(array_slice($arr, $key2, true));
        print_r($route1);
        echo "<pre>";
    }


    function selectBus2($name, $arrbus2, $route1, $route2, $route3)
    {
        foreach ($route1 as $elem) {
            if (($elem == $name) == true) {
                echo "Автобус под № :";
                echo "<pre>";
                print_r($arrbus2[0]);
                echo "<pre>";



            }
        }
        foreach ($route2 as $elem2) {
            if (($elem2 == $name) == true) {
                echo "Автобус под № :";
                echo "<pre>";
                print_r($arrbus2[1]);
                echo "<pre>";



            }
        }
        foreach ($route3 as $elem3) {
            if (($elem3 == $name) == true) {
                echo "Автобус под № :";
                echo "<pre>";
                print_r($arrbus2[2]);
                echo "<pre>";


            }
        }




    }





            function latlong (){



            }







}

