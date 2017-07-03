<?php
    class bar {
        private $pricelist;
        private $mest;
        private $time;
        private $status;

        /**
         * @return mixed
         */
        public function getPricelist()
        {
            return $this->pricelist;
        }

        /**
         * @param mixed $pricelist
         */
        public function setPricelist($pricelist)
        {
            $this->pricelist = $pricelist;
        }

        /**
         * @return mixed
         */
        public function getMest()
        {
            return $this->mest;
        }

        /**
         * @param mixed $mest
         */
        public function setMest($mest)
        {
            $this->mest = $mest;
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

        /**
         * @return mixed
         */
        public function getStatus()
        {
            return $this->status;
        }

        /**
         * @param mixed $status
         */
        public function setStatus($status)
        {
            $this->status = $status;
        }

        function listtype ($pricelist){
            implode("," , $pricelist);
            echo "<pre>";
            print_r($pricelist);
            echo "</pre>";
        }


        function status($status , $time){
            if ($time > 24){
                echo "Бар закрыт";
            }
            else {
                echo "Открыто";
            }
        }

    }