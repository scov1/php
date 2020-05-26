<?php


class TagBody
{
    protected $body;
    private $arrClass = [];

    public function __construct($value)
    {
        if(is_array($value))
            $this->set($value);
        else
            $this->append($value);
    }

    function set(array $value){
        $this->arrClass = $value;
    }

    function get(){
        return $this->arrClass;
    }


    function append($value){
        $this->arrClass[] = $value;
    }



    function prepend($value){
        array_unshift($this->body,$value);
    }


    function isExists($value) : bool{
        return in_array($value, $this->get());
    }

    function remove($value){
        $key = array_search($value,$this->get());
        if($key){
            unset($this->arrClass[$key]);
        }

    }


    public function __toString() : string
    {
        $result = '';
        $values = array_values($this->get());
        for($i = 0; $i < count($values); $i++){
            $result .= $values[$i] . ' ';
        }
        return $result;
    }
}