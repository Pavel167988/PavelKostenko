<?php
    class food {
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

        function price ($price , $a){
            $c = $price - $a;
            return $c;
        }

        function names ($names = array ('milk' , 'buton' , 'cheese' , 'bear' , 'meat')){
            foreach ($names as $elem){
                echo "<pre>";
                print_r($elem);
                echo "</pre>";
            }
        }
    }