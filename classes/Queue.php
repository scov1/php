<?php


class Queue implements Iterator
{
    protected $queue;

    public function __construct()
    {
        $this->clear();
    }

    function clear(){
        $this->queue=[];
        return $this;
    }

    function add($item){
        $this->queue[]=$item;
        return $this;
    }

    function pop(){
        return array_shift($this->queue);
    }

    function toArray(){
        return $this->queue;
    }



    public function current()
    {
        return $this->pop();
    }

    public function next()
    {
        // TODO: Implement next() method.
    }

    public function key()
    {
        return null;
    }

    public function valid()
    {
        return isset($this->queue[0]);
    }

    public function rewind()
    {
        // TODO: Implement rewind() method.
    }
}