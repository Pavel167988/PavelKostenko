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
    public function __construct($windows, $doors, $lightstatus)
    {
        $this->windows = $windows;
        $this->doors = $doors;
        $this->lightstatus = $lightstatus;

    }


    function lightStatusON()    {

           return $this->lightstatus = 1;


    }
     function lightStatusOFF(){
              return $this->lightstatus = 0;

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


    function statusroom($obj){
            echo "<pre>";
            print_r($obj);
            echo "<pre/>";
    }
}


