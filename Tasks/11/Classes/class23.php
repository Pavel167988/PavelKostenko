<?php
class tree {
    private $tree;
    private $names;

    /**
     * @return mixed
     */
    public function getTree()
    {
        return $this->tree;
    }

    /**
     * @param mixed $tree
     */
    public function setTree($tree)
    {
        $this->tree = $tree;
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



    function namess ($names = array()){
        echo "<pre>";
        print_r($names);
        echo "<pre / >";
    }


    function kolvoPot ($tree , $kolvo){
        $k = $tree * $kolvo;
        return $k;
    }
}