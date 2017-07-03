<?php
    class domofon {
        private $podezd;

        private $kolvo;

        /**
         * @return mixed
         */
        public function getPodezd()
        {
            return $this->podezd;
        }

        /**
         * @param mixed $podezd
         */
        public function setPodezd($podezd)
        {
            $this->podezd = $podezd;
        }

        /**
         * @return mixed
         */
        public function getNomera()
        {
            return $this->nomera;
        }

        /**
         * @param mixed $nomera
         */
        public function setNomera($nomera)
        {
            $this->nomera = $nomera;
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



        function kolvo($podzezd , $kolvo){
            $c = $podzezd * $kolvo;
            return $c;

        }

        function info ($podzezd){
            echo "В этом доме".$podzezd."Подьездов";

        }

    }

