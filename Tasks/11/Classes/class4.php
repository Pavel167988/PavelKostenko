<?php
class mobile{
    private $price;
    private $color;

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
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }


    function priceList($arr = array("Iphone 7s"=>"900$" , "Samsung S7"=>"850$" , "Sony"=>"450$" )){
        echo '<pre>';
        print_r($arr);
        echo '<pre>';
    }

    function priceNew ($price){
        if ($price < 500){
            $price3 = $price + 15;
            return $price3;
        }
        else {
            echo "Цена впорядке";
        }
    }
}