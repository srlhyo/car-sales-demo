<?php

class Car extends SiteData
{
    public $year;
    public $make;
    public $color;
    public $price;
    public $available = false;
    public $sales = 1;

    public function __construct($year, $make, $color, $price)
    {
        $this->year = $year;
        $this->make = $make;
        $this->color = $color;
        $this->price = $price;
    }

    // how many cars have been sold
   public function sales()
   {
       return $this->sales++;
   }

   public function howOld()
   {
        $currentYear = date('Y');
        return $currentYear = date('Y') - $this->year;
   }
}