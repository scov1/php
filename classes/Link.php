<?php

//require_once "baseTag.php";


class Link extends BaseTag
{
    public function __construct(string $name)
    {
        echo "LINK_CONTSRUCT";
        parent::__construct($name);
    }
}