<?php
class Bus {
    public $arrbus = [];

    /**
     * Bus constructor.
     * @param array $arrbus
     */
    public function __construct($arrbus, $route)
    {
        $this->arrbus = $arrbus;
        $this->route = $route;
    }



    function statusBus ($obj){
        echo "<pre>";
        print_r($obj);
        echo "<pre>";
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












}

