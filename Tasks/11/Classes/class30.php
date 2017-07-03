<?php
class human {
    private $name;
    private $age;
    private $height;

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
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }



    function listtype ($name , $age , $height){
        echo "Зовут".$name."ему".$age."Рост".$height;
    }


    function starost ($age){
        if ($age >= 60){
            echo "Уже старый...";

        }
        elseif ($age <= 30){
            echo "Молодой!!";
        }

    }
}