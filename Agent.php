<?php
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