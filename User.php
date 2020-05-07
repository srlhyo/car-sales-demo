<?php
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
