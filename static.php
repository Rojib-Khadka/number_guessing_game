<?php
class base{
    public static $name="Hari";
    

  





}
class derived extends base{
    public function show(){
        echo parent::$name;
        }

}
$test=new base();
$test1=new derived();
$test1->show();

//echo base::$name;





?>