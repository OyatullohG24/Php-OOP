<?php

class Destructor
{
     public $name;
     public $work;

     function __construct($name, $work) {
          $this->name = $name;
          $this->work = $work;
     }
     function __destruct() {
          echo "The fruit is {$this->name} and the color is {$this->work}.";
     }
}


$apple = new ClassMisol("Controller", "Boshqaruv");