<?php

class Audi
{
     public $name;
     public $fuel;

     public function __construct($name, $fuel){
          $this->name = $name;
          $this->fuel = $fuel;
     }
     public function getName(){
          return $this->name;
     }
     public function getFuel(){
          return $this->fuel;
     }

}

$audi = new Audi('Audi Q9', 'Dizel');
echo $audi->getName(). PHP_EOL ;
echo $audi->getFuel();
