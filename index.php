<?php
abstract class vehicle{
    public function startEngine(){
        echo " Engine started\n ";
    }
    abstract function drive();

    
}
class car extends vehicle{
    public function drive(){
        echo " Hello I am car and I am driving\n";
    }

}
class motercycle extends vehicle{
    public function drive(){
        echo"  Hello I am bike and I am biking\n";
    }
}

$car=new car();
$motercycle=new motercycle();
$car->startEngine();
$car -> drive();
$motercycle -> drive();


?>