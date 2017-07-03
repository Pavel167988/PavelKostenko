<?php
class Floors{
    private $apartment;
    private $names;
    private $kol;
    private $floors;

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

    /**
     * @return mixed
     */
    public function getApartment()
    {
        return $this->apartment;
    }

    /**
     * @param mixed $apartment
     */
    public function setApartment($apartment)
    {
        $this->apartment = $apartment;
    }

    /**
     * @return mixed
     */
    public function getNames()
    {
        return $this->names;
    }

    /**
     * @param mixed $names
     */
    public function setNames($names)
    {
        $this->names = $names;
    }

    /**
     * @return mixed
     */
    public function getKol()
    {
        return $this->kol;
    }

    /**
     * @param mixed $kol
     */
    public function setKol($kol)
    {
        $this->kol = $kol;
    }


    function vivod ($apartment, $names){
        echo $apartment."=>".$names;
    }

    function kol($floors, $kol){
        $kol = $floors * $kol;
        return $kol;
    }
}