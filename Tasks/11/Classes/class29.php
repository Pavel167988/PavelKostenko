<?php
    class weather {
        private $weather ;
        private $time;

        /**
         * @return mixed
         */
        public function getWeather()
        {
            return $this->weather;
        }

        /**
         * @param mixed $weather
         */
        public function setWeather($weather)
        {
            $this->weather = $weather;
        }

        /**
         * @return mixed
         */
        public function getTime()
        {
            return $this->time;
        }

        /**
         * @param mixed $time
         */
        public function setTime($time)
        {
            $this->time = $time;
        }



        function time ($weather, $time){
            if ($weather = "summer" and $time <= 20){
                echo "МОЖНО ПЛАВАТЬ";
            }
            else {
                echo "Холодно...бррр..";
            }


            function time ($time){
                return $time;
            }
        }
    }