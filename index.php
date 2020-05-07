<?php
require 'functions.php';

class SiteData
{
    public $siteSalesMessages;
    public $siteImages;

    public function __construct($siteImages, $siteSalesMessages)
    {
        $this->siteImages = $siteImages;
        $this->siteSalesMessages = $siteSalesMessages;
    }

    public function salesMessage($agent)
    {
        if ($agent->salesAuthorized) {
            return $this->siteSalesMessages['success'];
        } else {
            return $this->siteSalesMessages['fail'];
        }
    }

    public function userProfileImage($user)
    {
        // dd($agent);
        if ($user->name != null) {
            return $this->siteImages["profile"]["buyer"];
        } else {
            return "<script>alert('something went wrong!')</script>";
        }
    }

    public function agentProfileImage($agent)
    {
        if ($agent->name != null) {
            return $this->siteImages["profile"]["agent"];
        } else {
            return "<script>alert('something went wrong!')</script>";
        }
    }

    public function carImages($car)
    {
        // dd($car);
        if ($car->make == "Ferrari") {
            return $this->siteImages["cars"]["ferrari"];
        }

        if ($car->make == "Porsh") {
            return $this->siteImages["cars"]["porsh"];
        }

        if ($car->make == "Fiat") {
            return $this->siteImages["cars"]["fiat"];
        }
    }
}

// User class
class User extends SiteData
{
    public $name;
    public $age;
    public $budget;
    public $drivingLicense = false;

    public function __construct($name, $age, $budget)
    {
        $this->name = $name;
        $this->age = $age;
        $this->budget = $budget;
    }

    public function hasDrivingLicense()
    {
        if ($this->age >= 18) {
            return $this->drivingLicense = true;
        } else {
            return $this->drivingLicense = false;
        }
    }

}

// Agent class
class Agent extends User
{
    public $jobTitle;
    public $yearJobStarted;
    public $salesAuthorized = false;

    public function __construct($jobTitle, $yearJobStarted)
    {
        $this->jobTitle = $jobTitle;
        $this->yearJobStarted = $yearJobStarted;
    }

    public function salesAuthorized($user, $car)
    {
        // for the sales to happen the budget has to be more or equal to the car price
        if ($user->budget >= $car->price && $user->drivingLicense == true) {
            $this->salesAuthorized = true;
            return true;
        } else {
            return false;
        }
    }
    // determine work experience
    public function yearsOfExperience()
    {
        // years of experience = current year - year job started
        $currentYear = date('Y');

        return  $currentYear - $this->yearJobStarted;
    }
}

// Car class
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
        return $currentYear - $this->year;
   }
}

// all the data for now

// images

$images = [
    "cars" => [
        "ferrari" => "https://static.stuff.co.nz/files/FXXK2.jpg",
        "porsh" => "https://www.autocar.co.uk/sites/autocar.co.uk/files/Box11.jpg",
        "fiat" => "https://s1.cdn.autoevolution.com/images/gallery/FIAT-500-R-Rinnovata-2353_13.jpg",
    ],

    "profile" => [
        "buyer" => "https://roadswetakecom.files.wordpress.com/2018/08/pexels-photo-220453.jpeg",
        "agent" => "https://miro.medium.com/max/785/0*Ggt-XwliwAO6QURi.jpg",
    ]
];

// Sales Messages
$salesMessages = [
    "success" => "Pleasure to make business with you. The car is yours!",
    "fail" => "Sorry, your budget is insuficient, I am afraid!",
];


// where objects are instatiated

$data = new SiteData($images, $salesMessages);

$jonas = new User('Jonas', 25, 60000);

$buffo = new Agent('Sales Agent', 2000);
$buffo->name = "Buffo";

$ferrari = new Car(1950, 'Ferrari', 'red', 50000);
$porsh = new Car(1974, 'Porsh', 'grey', 40000);
$fiat = new Car(1940, 'Fiat', 'red', 10000);

// stories
$jonas->hasDrivingLicense();

$buffo->salesAuthorized($jonas, $ferrari);

$data->salesMessage($buffo);

$data->userProfileImage($jonas);
$data->agentProfileImage($buffo);
$data->carImages($ferrari);
$data->carImages($porsh);
$data->carImages($fiat);

// dd($result);

require 'index.view.php';