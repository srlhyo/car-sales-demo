<?php
class Car
{
    public $id;
    public $name;
    public $image_url;
    public $year;
    public $color;
    public $price;
    public $available = false;
    public $sales = 1;

   public function sales()
   {
       return $this->sales++;
   }

   public function howOld()
   {
        $currentYear = date('Y');
        return $currentYear - $this->year;
   }
}