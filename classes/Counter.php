<?php


class Counter
{
    public static $count = 0;

    public function __construct()
    {
        ++self::$count;
    }
}

$count1=new Counter();
$count2=new Counter();

echo Counter::$count;