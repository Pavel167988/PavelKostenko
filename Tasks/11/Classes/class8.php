<?php
class calc {
    private $multiplikation;
    private $division;
    private $additon;

    /**
     * @return mixed
     */
    public function getMultiplikation()
    {
        return $this->multiplikation;
    }

    /**
     * @param mixed $multiplikation
     */
    public function setMultiplikation($multiplikation)
    {
        $this->multiplikation = $multiplikation;
    }

    /**
     * @return mixed
     */
    public function getDivision()
    {
        return $this->division;
    }

    /**
     * @param mixed $division
     */
    public function setDivision($division)
    {
        $this->division = $division;
    }

    /**
     * @return mixed
     */
    public function getAdditon()
    {
        return $this->additon;
    }

    /**
     * @param mixed $additon
     */
    public function setAdditon($additon)
    {
        $this->additon = $additon;
    }

    function multi ($a , $b){
        $c = $a * $b;
        return $c;
    }

    function addi($a , $b){
        $c = $a - $b;
        return $c;
    }
}