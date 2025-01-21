<?php

class  Fruit
{
     public $name;
     public $color;
     public $taste;

     /**
      * @return mixed
      */
     public function getName()
     {
          return $this->name;
     }

     /**
      * @param mixed $name
      */
     public function setName($name)
     {
          $this->name = $name;
     }

     /**
      * @return mixed
      */
     public function getColor()
     {
          return $this->color;
     }

     public function setColor($color)
     {
          $this->color = $color;
     }

     /**
      * @return mixed
      */
     public function getTaste()
     {
          return $this->taste;
     }

     public function setTaste($taste)
     {
          $this->taste = $taste;
     }

}

//$apple = new Fruit();
//$apple->setName('Apple');
//$apple->setColor('Red');
//$apple->setTaste('Sweet');
//
//print "Name: ". $apple->getName(). PHP_EOL;
//print "Color: ". $apple->getColor(). PHP_EOL ;
//print "Taste: ". $apple->getTaste();

