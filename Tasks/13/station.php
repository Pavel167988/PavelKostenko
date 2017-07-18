<?php

    class Station
    {
        public $arrstation = [];


        /**
         * Station constructor.
         * @param array $arrstation
         */
        public function __construct(array $arrstation)
        {
            $this->arrstation[] = $arrstation;

        }


        function statusStation($obj2)
        {
            echo "<pre>";
            print_r($obj2);
            echo "<pre>";
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
            }
            else {
                echo "Нет данного мартшрута";
            }


        }
    }


