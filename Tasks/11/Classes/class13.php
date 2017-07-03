<?php
    class holodilnik{
        private $status;
        private $name;
        private $temperuture;

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

        /**
         * @return mixed
         */
        public function getName()
        {
            return $this->name;
        }

        /**
         * @param mixed $name
         */
        public function setName($name)
        {
            $this->name = $name;
        }

        /**
         * @return mixed
         */
        public function getTemperuture()
        {
            return $this->temperuture;
        }

        /**
         * @param mixed $temperuture
         */
        public function setTemperuture($temperuture)
        {
            $this->temperuture = $temperuture;
        }

        function status ($status){
            if ($status = 1 ){
                echo "Холодильник включен и готов к работе";
            }
            else {
                echo "Он выключен, включите!";
            }

            function temp($temperature){
                if ($temperature >= 5){
                    echo "Срочно поменять температуру!";
                }
                else {
                    echo "Все хорошо!";
                }

            }
        }
    }