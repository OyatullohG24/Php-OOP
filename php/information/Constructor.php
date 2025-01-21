<?php

// Konstruktor ob'ektni yaratishda ob'ekt xususiyatlarini ishga tushirishga imkon beradi.
// Agar siz __construct() funksiyasini yaratsangiz, sinfdan obyekt yaratganingizda PHP avtomatik ravishda bu funksiyani chaqiradi.
// Konstruksiya funktsiyasi ikkita pastki chiziq bilan boshlanadi (__)
// Quyidagi misolda konstruktordan foydalanish bizni kod miqdorini kamaytiradigan set_name() usulini chaqirishdan qutqarishini ko'ramiz.
class Constructor
{
     public $name;
     public $color;

     function __construct($name)
     {
          $this->name = $name;
     }

     function get_name()
     {
          return $this->name;
     }
}

$apple = new Car("BMW");
echo $apple->get_name();