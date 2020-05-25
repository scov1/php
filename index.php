<?php


require_once 'Matrix.php';

$matrix = new Matrix(4, 3);
print_r($matrix->toArray());

echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;

//$matrix->addMatrix(10);
//print_r($matrix->toArray());
//
//$matrix->diffMatrix(5);
//var_dump($matrix->toArray());

$matrix->multMatrix(2);
print_r($matrix->toArray());

