<?php
    class football {
        private $ball;
        private $footbalers;

        /**
         * @return mixed
         */
        public function getBall()
        {
            return $this->ball;
        }

        /**
         * @param mixed $ball
         */
        public function setBall($ball)
        {
            $this->ball = $ball;
        }

        /**
         * @return mixed
         */
        public function getFootbalers()
        {
            return $this->footbalers;
        }

        /**
         * @param mixed $footbalers
         */
        public function setFootbalers($footbalers)
        {
            $this->footbalers = $footbalers;
        }


        function footballB($ball){
            $this->ball;
        }


        function footballF($footballers){
            $this->footbalers;
        }
    }