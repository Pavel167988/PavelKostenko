<?php
    class garden {
        private $names;
        private $kolvo;

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

        function kolvo($kolvo){
            $c = $kolvo * 10;
            return $c;
        }

        function names ($names = array ()){
            return $names;
        }
    }