<?php
    class flowers {
        private $names;
        private $room;

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
        public function getRoom()
        {
            return $this->room;
        }

        /**
         * @param mixed $room
         */
        public function setRoom($room)
        {
            $this->room = $room;
        }

        function flowersTOP($names = array ("")){
            echo "<pre>";
            print_r($names);
            echo "</pre>";
        }


        function kolvo ($names , $rooms){
            $avg = 0;
            foreach ($names as $elem){
                $avg++;
            }
            $c = $avg + $rooms;
            return $c;
        }

    }