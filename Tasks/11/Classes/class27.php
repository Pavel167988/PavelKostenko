<?php
    class tennis {
        private $balls;
        private $timematch;
        private $nameplayers;

        /**
         * @return mixed
         */
        public function getBalls()
        {
            return $this->balls;
        }

        /**
         * @param mixed $balls
         */
        public function setBalls($balls)
        {
            $this->balls = $balls;
        }

        /**
         * @return mixed
         */
        public function getTimematch()
        {
            return $this->timematch;
        }

        /**
         * @param mixed $timematch
         */
        public function setTimematch($timematch)
        {
            $this->timematch = $timematch;
        }

        /**
         * @return mixed
         */
        public function getNameplayers()
        {
            return $this->nameplayers;
        }

        /**
         * @param mixed $nameplayers
         */
        public function setNameplayers($nameplayers)
        {
            $this->nameplayers = $nameplayers;
        }


        function info ($balls, $timematch){
            echo "За это время".$timematch.", было использовано".$balls."мячей";
        }

        function nameplayers($nameplayers){
           $players = explode("", $nameplayers);
            echo "<pre>";
            print_r($players);
            echo "<pre>";
        }
    }