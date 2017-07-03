<?php
    class CocaCola {
        private $v;
        private $name;
        private $price;

        /**
         * @return mixed
         */
        public function getName()
        {
            return $this->name;
        }

        /**
         * @param mixed $name
         */
        public function setName($name)
        {
            $this->name = $name;
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


        function cola($name , $price){
            echo "Название".$name."Цена :".$price;
        }

        function pri ($price){
            for($i=0;$i<$price;$i++){
                if ($price = 10){
                    echo "Мы берем";
                }
            }
        }
    }