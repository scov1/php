<?php

//require_once 'TagName.php';
//require_once 'TagAttributes.php';
//require_once 'TagBody.php';

abstract class BaseTag
{
    private $name;
    private $attributes;
    private $body;




    public function __construct(string $name)
    {
        $this->name = new Tagname($name);
        $this->attributes = new TagAttributes();
        $this->body=new TagBody();
    }

    public function name()
    {
        return $this->name;
    }


     function getBodyString():string
    {
        if($this->isSelfClosing())
            return '';

        return $this->body();
    }

    function body(){
        return $this->body;
    }

    function appendBody($value)
    {
        $this->body()->append($value);
        return $this;
    }

    function prependBody($value)
    {
        $this->body()->prepend($value);
        return $this;
    }

    function  attributes(){
        return $this->attributes;
    }


    function setAttribute(string $key, $value)
    {
        $this->attributes->$key= $value;
        return $this;
    }

    function getAttribute(string $key)
    {
        return $this->attributes->$key??null;
    }

    function appendAttribute(string $key, $value)
    {
        $this->attributes()->append($key,$value);
    }

    function prependAttribute(string $key, $value)
    {
        $this->setAttribute($key, $value . $this->getAttribute($key));
        return $this;
    }


    function isSelfClosing()
    {
        return $this->name()->isSelfClosing();
    }


    function start(): string
    {
        $str = "<{$this->name()}{$this->attributes()}";



        if($this->isSelfClosing()){
            $str .= " /";
        }

        return "{$str}>";
    }

    function end(): ?string
    {
        if(!$this->isSelfClosing())
        {
            return "</{$this->name()}>";
        }
        else {
            return null;
        }
    }

    function __toString(): string
    {
        return $this->start() . $this->getBodyString() . $this->end();
    }

    function __get($name)
    {
       return $this->getAttribute($name);

    }

    function  __set($name,$value){
        $this->setAttribute($name,$value);
    }

    function appendTo(BaseTag $tag){
        $tag->appendBody($this);
        return $this;
    }

    function prependTo(BaseTag $tag){
        $tag->prependBody($this);
        return $this;
    }
}

