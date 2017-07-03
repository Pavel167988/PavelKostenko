<?php
    class animals{
        private $names;
        private $kolvo;
        private $price;

        /**
         * @return mixed
         */
        public function getNames()
        {
            return $this->names;
        }

        /**
         * @param mixed $names
         */
        public function setNames($names)
        {
            $this->names = $names;
        }

        /**
         * @return mixed
         */
        public function getKolvo()
        {
            return $this->kolvo;
        }

        /**
         * @param mixed $kolvo
         */
        public function setKolvo($kolvo)
        {
            $this->kolvo = $kolvo;
        }

        /**
         * @return mixed
         */
        public function getPrice()
        {
            return $this->price;
        }

        /**
         * @param mixed $price
         */
        public function setPrice($price)
        {
            $this->price = $price;
        }



        function list ($names = array("dogs" , "cats" , "elephant" , "snakes")){
            echo "<pre>";
            print_r($names);
            echo "</pre>";
        }


        function kolvo($names , $kolvo){
            foreach ($names as $elem){
                $kolvo++;
            }
            echo $kolvo;
        }
    }