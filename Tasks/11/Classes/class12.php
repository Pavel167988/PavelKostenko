<?php
class Phone {
    private $name;
    private $callbacknumber;

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
    public function getCallbacknumber()
    {
        return $this->callbacknumber;
    }

    /**
     * @param mixed $callbacknumber
     */
    public function setCallbacknumber($callbacknumber)
    {
        $this->callbacknumber = $callbacknumber;
    }


    function callback($callbacknumber){
        return $callbacknumber;
    }

    function phonename($name){
        echo $name;
    }
}