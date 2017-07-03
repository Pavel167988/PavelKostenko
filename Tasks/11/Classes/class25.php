<?php
class computer {
    private $price;
    private $namemonitor;
    private $namesist;

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getNamemonitor()
    {
        return $this->namemonitor;
    }

    /**
     * @param mixed $namemonitor
     */
    public function setNamemonitor($namemonitor)
    {
        $this->namemonitor = $namemonitor;
    }

    /**
     * @return mixed
     */
    public function getNamesist()
    {
        return $this->namesist;
    }

    /**
     * @param mixed $namesist
     */
    public function setNamesist($namesist)
    {
        $this->namesist = $namesist;
    }

    function price($price){
        if ($price >= 1000){
            echo "ЭТОТ КОМПЬБТЕР МОЩНЫЙ!";
        }
        else {
            echo "Хороший компьютер";
        }

        function names($namemonitor , $namelist){
           $arr =  explode("" , $namelist);
           echo "<pre>";
           print_r($arr);
           echo "<pre>";
        }
    }
}