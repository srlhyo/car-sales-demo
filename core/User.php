<?php
class User
{
    public $id;
    public $name;
    public $age;
    public $budget;
    public $image_url;
    public $person_title;
    public $drivingLicense = false;

    public function hasDrivingLicense()
    {
        if ($this->age >= 18) {
            return $this->drivingLicense = true;
        } else {
            return $this->drivingLicense = false;
        }
    }

}
