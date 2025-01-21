<?php

require_once 'Fruit.php';
class Strawberry extends Fruit
{
     public $origin;

     public function getOrigin()
     {
          return $this->origin;
     }

     public function setOrigin($origin)
     {
          $this->origin = $origin;
     }
}

