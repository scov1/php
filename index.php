<?php
//include_once 'classes/baseTag.php';
require_once 'autoload.php';


//$a=new Tag('a');
//$a->href='//example.com';
//$a->appendBody('EXAMPLE');
//
//echo $a;

//class OldClass{
//    private $name="John";
//
//    function  getName(){
//        return $this->name;
//    }
//}
//
//class NewClass extends OldClass{
//    public $name = "Bob";
//
//    function  getName(){
//        return parent::getName();
//    }
//}
//
//echo (new NewClass())->getName();


//$div=new Tag('div');
//$div->setAttribute('class','container')
//    ->appendBody('Hello');
//
//$link=new Tag('a');
//$link->href='//google.com';
//$link->appendBody('world');
//$link->appendTo($div);
//
//
//var_dump((string)$div);

//class Stat{
//    static protected $name = 'Robert';
//
//
//     static function getName(){
//        return static::$name;
//    }
//
//}
//class NewStat extends Stat{
//    static protected $name='Bob';
//}
//
//echo NewStat::getName();

//interface CanEat{
//    function eat();
//}
//
//interface CanFly{
//    function fly();
//}
//interface CanSleep{
//    function sleep();
//}
//interface CanHunt{
//    function hunt();
//}
//
//interface CanTalk{
//    function talk();
//}
//interface CanStoreFood{
//    function storeFood();
//}
//interface CanBreed{
//    function breed();
//}
//
//interface CanFastRun{
//    function fastRun();
//}
//
//interface CanJump{
//    function jump();
//}
//
//interface CanSpit{
//    function spit();
//}
//
//interface CanBlink{
//    function blink();
//}
//
//interface GiveBirthToManyBaby{
//    function giveBirthTo();
//}
//
//interface CanCrawl{
//    function crawl();
//}
//
//
//
//interface AnimalInterface extends CanEat, CanSleep{}
//interface BirdInterface extends AnimalInterface, CanFly {}
//interface PredatorInterface extends AnimalInterface , CanHunt {}
//
//
//
//
//class Bird implements BirdInterface
//{
//
//    function eat()
//    {
//        // TODO: Implement eat() method.
//    }
//
//    function fly()
//    {
//        // TODO: Implement fly() method.
//    }
//
//    function sleep()
//    {
//        // TODO: Implement sleep() method.
//    }
//}
//class Eagle implements BirdInterface, CanHunt
//{
//
//    function eat()
//    {
//        // TODO: Implement eat() method.
//    }
//
//    function fly()
//    {
//        // TODO: Implement fly() method.
//    }
//
//    function sleep()
//    {
//        // TODO: Implement sleep() method.
//    }
//
//    function hunt()
//    {
//        // TODO: Implement hunt() method.
//    }
//}
//class Wolf implements PredatorInterface
//{
//
//    function eat()
//    {
//        // TODO: Implement eat() method.
//    }
//
//    function sleep()
//    {
//        // TODO: Implement sleep() method.
//    }
//
//    function hunt()
//    {
//        // TODO: Implement hunt() method.
//    }
//}
//
//class Hamster implements AnimalInterface
//{
//
//    function eat()
//    {
//        // TODO: Implement eat() method.
//    }
//
//    function sleep()
//    {
//        // TODO: Implement sleep() method.
//    }
//}
//
//class Camel implements CanSpit{
//
//    function spit()
//    {
//        // TODO: Implement spit() method.
//    }
//}
//
//class Guepard implements CanFastRun,CanEat,CanSleep{
//
//    function eat()
//    {
//        // TODO: Implement eat() method.
//    }
//
//    function sleep()
//    {
//        // TODO: Implement sleep() method.
//    }
//
//    function fastRun()
//    {
//        // TODO: Implement fastRun() method.
//    }
//}
//
//class Elk implements  CanJump,CanEat,CanFastRun{
//
//    function eat()
//    {
//        // TODO: Implement eat() method.
//    }
//
//    function fastRun()
//    {
//        // TODO: Implement fastRun() method.
//    }
//
//    function jump()
//    {
//        // TODO: Implement jump() method.
//    }
//}
//
//class Frog implements CanEat,CanSleep,CanJump{
//
//    function eat()
//    {
//        // TODO: Implement eat() method.
//    }
//
//    function sleep()
//    {
//        // TODO: Implement sleep() method.
//    }
//
//    function jump()
//    {
//        // TODO: Implement jump() method.
//    }
//}
//
//class Owl implements CanEat,CanFly,CanTalk{
//
//    function eat()
//    {
//        // TODO: Implement eat() method.
//    }
//
//    function fly()
//    {
//        // TODO: Implement fly() method.
//    }
//
//    function talk()
//    {
//        // TODO: Implement talk() method.
//    }
//}
//
//class Rabbit implements GiveBirthToManyBaby,CanEat,CanJump{
//
//    function eat()
//    {
//        // TODO: Implement eat() method.
//    }
//
//    function jump()
//    {
//        // TODO: Implement jump() method.
//    }
//
//    function giveBirthTo()
//    {
//        // TODO: Implement giveBirthTo() method.
//    }
//}
//
//class Snake implements CanCrawl,CanEat,CanHunt{
//
//    function eat()
//    {
//        // TODO: Implement eat() method.
//    }
//
//    function hunt()
//    {
//        // TODO: Implement hunt() method.
//    }
//
//    function crawl()
//    {
//        // TODO: Implement crawl() method.
//    }
//}


//$people = new Collections();
//$people['Roberto']='Cavalli';
//$people['Tom']='Ford';
//
//unset($people['Roberto']);
//var_dump(isset($people['Roberto']));

//$app=new Collections();
//$app['name']='TESTER';
//$app['timezone']='UTC+6';
//$app['lang']='ru_RU';


$queue = new Queue();
$queue->add(1);
$queue->add(2);
$queue->add(3);



foreach ($queue as $value){
    echo $value . "\n";
}


