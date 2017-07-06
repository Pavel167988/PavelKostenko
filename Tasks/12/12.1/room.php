<?php
class Room {
    public $windows;
    public $doors;
    /**
     * @var boolean
     */
    public $lightstatus;
    public $human;

    /**
     * Room constructor.
     * @param $windows
     * @param $doors
     * @param $lightstatus
     * @param $human
     */
    public function __construct($windows, $doors)
    {
        $this->windows = $windows;
        $this->doors = $doors;


    }


    function lightStatusON()    {

           return $this->lightstatus = "Свет включен";


    }
     function lightStatusOFF(){
              return $this->lightstatus = "Свет выключен";

     }




    function addhuman(){
            if ($this->doors !== 0){
                $this->human++;
                $this->lightStatusON();
            }

    }


    function deletehuman(){
            if ($this->doors !==0){
                $this->human--;
               return $this->lightStatusOFF();
            }
    }


    function statusroom($obj){
            echo "<pre>";
            print_r($obj);
            echo "<pre/>";
    }
}


