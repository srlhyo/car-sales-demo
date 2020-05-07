<?php
class Agent
{
    public $id;
    public $name;
    public $age;
    public $job_title;
    public $start_job;
    public $image_url;
    public $sucess_messages;
    public $fail_messages;
    public $salesAuthorized = false;

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