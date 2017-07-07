<?php
class Room {
    public $windows;
    public $doors;
    /**
     * @var string
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

            }
    }


    function statusroom($obj)
    {
        if ($this->human ==0){
        $this->lightStatusOFF();
        }
        else {
            $this->lightStatusON();
        }
            echo "<pre>";
            print_r($obj);
            echo "<pre/>";
    }
}


