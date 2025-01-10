<?php
class Car {
     // Xususiyatlar
     public $name;
     public $color;

     // Metodlar
     function set_name($name) {
          $this->name = $name;
     }
     function get_name() {
          return $this->name;
     }
}
?>