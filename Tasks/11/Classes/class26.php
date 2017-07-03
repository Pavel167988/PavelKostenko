<?php
    class University {
        private $adrres;
        private $kolvos;
        private $floors;

        /**
         * @return mixed
         */
        public function getAdrres()
        {
            return $this->adrres;
        }

        /**
         * @param mixed $adrres
         */
        public function setAdrres($adrres)
        {
            $this->adrres = $adrres;
        }

        /**
         * @return mixed
         */
        public function getKolvos()
        {
            return $this->kolvos;
        }

        /**
         * @param mixed $kolvos
         */
        public function setKolvos($kolvos)
        {
            $this->kolvos = $kolvos;
        }

        /**
         * @return mixed
         */
        public function getFloors()
        {
            return $this->floors;
        }

        /**
         * @param mixed $floors
         */
        public function setFloors($floors)
        {
            $this->floors = $floors;
        }


        function overallstnow ($floors , $kolvos) {
            $c = $floors * $kolvos;
            return $c;

        }

        function list ($addres){
            echo $addres;
        }
    }