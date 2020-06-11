<?php

namespace  HTML;

class Tag extends baseTag
{

    public static function __callStatic($name, $arguments)
    {
        return new self($name);
    }

}