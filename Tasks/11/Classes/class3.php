<?php
class dogs {
    private $age;
    private $name;
    private $weight;

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
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

        function oldAge ($age){
            if($age > 15){
                echo "Эта собака уже старая";
            }
            else {
                echo "Этой собаки жить да жить";
            }
        }

        function weight ($weight, $name){
            if ($name = "Barsik"){
                $weight = 57;
                return $weight;
            }
            else {
                $weight = 61;
                return $weight;
            }
        }
}