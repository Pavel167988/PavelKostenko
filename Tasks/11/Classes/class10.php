<?php
class Driver {
    private $age;
    private $category;

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
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }


    function drive($kategory)
    {
        if ($kategory = "A" or $kategory = "B") {
            echo "Этот водитель имеет категорию нужную нам";
        } elseif ($kategory = "C"){
            echo "У этого водителя есть категория для трансортировки грузов";
        }
        }

}