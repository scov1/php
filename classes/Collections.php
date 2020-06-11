<?php


class Collections implements  ArrayAccess,Iterator
{
    protected $items;

    public function __construct(array $items=[])
    {
        $this->items=$items;
    }

    function clear(){
        $this->items=[];
        return $this;
    }

    function get($key,$default=null){
        return $this->items[$key]??$default;
    }

    function set($key,$value){
        $this->items[$key]=$value;
    }

    public function offsetExists($key)
    {
        return $this->exists($key);
    }

    public function offsetGet($key)
    {
        return $this->get($key);
    }

    public function offsetSet($offset, $value)
    {
        $this->set($offset,$value);
    }

    public function offsetUnset($offset)
    {
        return $this->delete($offset);
    }

    function exists($key){
        return isset($this->items[$key]);
    }

    function delete($key){
        unset($this->items[$key]);
        return $this;
    }

    function __get($name){
        return $this->get($name);
    }
    function  __set($name,$value){
        $this->set($name,$value);
    }
    function toArray():array{
        return $this->items;
    }
    function toJson():string{
        return json_encode($this->toArray());
    }

    function keys(){
        return array_keys($this->toArray());
    }

    protected $position=0;

    public function current()
    {

       return $this->get($this->key());
    }

    public function next()
    {
        $this->position++;
    }

    public function key()
    {
        $keys=$this->keys();
        return $keys[$this->position];
    }

    public function valid()
    {
        $keys=$this->keys();
        return isset($keys[$this->position]);
    }

    public function rewind()
    {
        $this->position=0;
    }
}

