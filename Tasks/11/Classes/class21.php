<?php
    class printer {
        private $letter;
        private $time;

        /**
         * @return mixed
         */
        public function getLetter()
        {
            return $this->letter;
        }

        /**
         * @param mixed $letter
         */
        public function setLetter($letter)
        {
            $this->letter = $letter;
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


        function timeoverall($time){
            if($time >= 4){
                echo "Это струйный принтер";

            }
            else {
                echo "Это лазерный принтер";
            }
        }


        function letters($letter){
            if ($letter = "A4" and $letter = "A3"){
                echo "У нас есть такой принтер";

            }
            echo "У нас нет такого принтреа для печати";
        }
    }