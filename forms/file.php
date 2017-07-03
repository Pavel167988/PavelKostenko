<?php
    class Car{
        /**
         * @var string;
         */
        private $model;
        /**
         * @var int;
         */
        private $speed;
        /**
         * @var boolean;
         */
        private $engineStatus;
        /**
         * @var int;
         */
        private $engine;
        /**
         * @var int;
         */
        private $maxSpeed;

        /**
         * Car constructor.
         * @param bool $engineStatus
         */
        public function __construct($engineStatus)
        {
            $this->engineStatus = $engineStatus;

        }

        /**
         * @return bool
         */
        public function isEngineStatus(): bool
        {
            return $this->engineStatus;

        }

        /**
         * @param bool $engineStatus
         */
        public function setEngineStatus(bool $engineStatus)
        {
            $this->engineStatus = $engineStatus;
        }


function statusON(){
       return $this->engineStatus;
        }

function statusOFF ()
{
    return $this->engineStatus;
}
        /**
         * @return bool
         */

    }
    $status = new Car (false;
        echo $status->statusON();




