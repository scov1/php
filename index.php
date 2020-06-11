<?php

use HTML\Doctype;

//interface MammalAnimal{
//
//    function walk();
//    function sleep();
//    function hunt();
//
//    function fastrun();
//
//
//}
////function giveBirthTo();
////    function blink();
////
//
//interface AmphibiansAnimal{
//    function swim();
//    function jump();
//}
//
//interface ReptilesAnimal{
//    function swim();
//    function giveBirthTo();
//    function blink();
//}
//
//interface InsectsAnimal{
//
//    function walk();
//    function hunt();
//    function sleep();
//
//}
//
//interface Crustaceans{
//    function hunt();
//    function giveBirthTo();
//}
//
//trait CanCrawl{
//    function crawl(){}
//}
//
//trait CanGiveBirthTo{
//    function giveBirthTo(){}
//}
//
//trait fastRun{
//    function fastRun(){}
//}
//
//trait CanSwim{
//    function swim(){}
//}
//
//trait CanBlink{
//    function blink(){}
//}
//
//trait CanJump{
//    function jump(){}
//}
//
//trait CanWalk{
//    function walk(){}
//}
//
//trait CanSleep{
//    function sleep(){}
//}
//
//trait CanHunt{
//    function hunt(){}
//}
//
//class Geapard implements MammalAnimal{
//    use fastRun,CanWalk,CanSleep,CanHunt;
//}
//
//class Frog implements AmphibiansAnimal{
//    use CanJump,CanSwim;
//}
//
//class Snake implements ReptilesAnimal{
//    use CanSwim,CanBlink,CanGiveBirthTo;
//}
//
//class Spider implements InsectsAnimal{
//    use CanSleep,CanWalk,CanHunt;
//}
//
//class Rak implements Crustaceans{
//    use CanHunt,CanGiveBirthTo;
//}

use Numbers\First;

include_once "autholoader.php";

$doctype = new Doctype();


echo $doctype->getDoc();