<?php


interface ISpider extends IKind
{
    function hasPoison();
    function canCobweb();
}