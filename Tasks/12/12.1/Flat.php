<?php
class Flat
{
    public $arr = [];


    /**
     * Flat constructor.
     * @param $room
     */
    public function __construct($arr)
    {
        $this->arr[] = $arr;
    }

    function addrooms($room)
    {
        $this->arr[] = $room;
        return $this->arr;
    }

    function deleterooms(){
            unset($this->arr[1]);
            return $this->arr;

    }


    function status($obj)
    {
        echo "<pre>";
        print_r($obj);
        echo "<pre/>";
    }
}


