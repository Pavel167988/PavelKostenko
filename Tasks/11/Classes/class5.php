<?php
    class school {
        private $students;
        private $teachers;
        private $floors;

        /**
         * @return mixed
         */
        public function getStudents()
        {
            return $this->students;
        }

        /**
         * @param mixed $students
         */
        public function setStudents($students)
        {
            $this->students = $students;
        }

        /**
         * @return mixed
         */
        public function getTeachers()
        {
            return $this->teachers;
        }

        /**
         * @param mixed $teachers
         */
        public function setTeachers($teachers)
        {
            $this->teachers = $teachers;
        }

        /**
         * @return mixed
         */
        public function getFloors()
        {
            return $this->floors;
        }

        /**
         * @param mixed $floors
         */
        public function setFloors($floors)
        {
            $this->floors = $floors;
        }


        function names ($teachers , $floars){
            if ($floars <= 2){
                echo "На этом этаже работает".$teachers;
            }
            else {
                echo "На этом этаже никто не работает";
            }


        }

    }