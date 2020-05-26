<?php

require_once 'autoload.php';


$div = new Tag('div');
$div->addClass('container');
$div->addClass('bg');
$div->addClass('main');

if($div->classExists('bg'))
    $div->removeClass('bg');


echo $div;