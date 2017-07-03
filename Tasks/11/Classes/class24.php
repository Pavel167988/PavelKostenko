<?php
class  book {
    private $name;
    private $ageautor;

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
    public function getKolvo()
    {
        return $this->kolvo;
    }

    /**
     * @param mixed $kolvo
     */
    public function setKolvo($kolvo)
    {
        $this->kolvo = $kolvo;
    }

    function books ($name , $bookautor){
        echo $name.$bookautor;
    }


    function massbooks ($name = array()){
        echo "<pre>";
        print_r($name);
        echo "</pre>";
    }
}