<?php
    class Belarus {
        private $city;
        private $kolvo;

        /**
         * @return mixed
         */
        public function getCity()
        {
            return $this->city;
        }

        /**
         * @param mixed $city
         */
        public function setCity($city)
        {
            $this->city = $city;
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


        function Cities ($city){
            $city2 = explode(" " , $city);
            foreach ($city2 as $elem){
                echo "<pre>".$elem;
            }

        }
        function kolvo ($city , $kolvo){
            $c = $kolvo * $city;
            return $c;
        }
    }