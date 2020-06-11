<?php


spl_autoload_register(function ($name){
    require_once "./classes/{$name}.php";
});


//error_reporting(E_ALL ^ E_NOTICE);
//spl_autoload_register(function($name){
//
//
//   $name=str_replace('\\',DIRECTORY_SEPARATOR,$name);
//   $path= __DIR__ . DIRECTORY_SEPARATOR .DIRECTORY_SEPARATOR .$name .'.php';

//   if(!is_file($path))
//   {
//       $className=array_pop($items=explode('\\',$name));
//      //throw new Exception("Class $className not found in $path");
//       die;
//   }

//   require_once $path;
//});