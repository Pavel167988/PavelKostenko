<?php
class FLat {
    private $rooms;
    private $humans;
    private $windows;

    /**
     * @return mixed
     */
    public function getRooms()
    {
        return $this->rooms;
    }

    /**
     * @param mixed $rooms
     */
    public function setRooms($rooms)
    {
        $this->rooms = $rooms;
    }

    /**
     * @return mixed
     */
    public function getHumans()
    {
        return $this->humans;
    }

    /**
     * @param mixed $humans
     */
    public function setHumans($humans)
    {
        $this->humans = $humans;
    }

    /**
     * @return mixed
     */
    public function getWindows()
    {
        return $this->windows;
    }

    /**
     * @param mixed $windows
     */
    public function setWindows($windows)
    {
        $this->windows = $windows;
    }


       function room($arr = array('Pavel' , 'Igor' , 'Alexandr' )){
        echo '<pre>';
        print_r($arr);
        echo '<pre>';
       }



       function window($wind, $master){
           echo 'Сегодня мастер по имени'.$master.",вставил".$wind."окон";
       }
}