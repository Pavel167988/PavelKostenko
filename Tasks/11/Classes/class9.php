<?php
    class Worker {
        private $name;
        private $age;
        private $salary;

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
        public function getAge()
        {
            return $this->age;
        }

        /**
         * @param mixed $age
         */
        public function setAge($age)
        {
            $this->age = $age;
        }

        /**
         * @return mixed
         */
        public function getSalary()
        {
            return $this->salary;
        }

        /**
         * @param mixed $salary
         */
        public function setSalary($salary)
        {
            $this->salary = $salary;
        }

        function listWorker ($name , $age , $salary){
            echo $this->name;
            echo $this->age;
            echo $this->salary;
        }


        function salary ($salary){
            if ($salary > 2000 ){
                echo "У этого рабочего зарплата нормальная";
            }
            else {
                $salary2 = $salary + 1500;
                return $salary2;
            }
        }
    }