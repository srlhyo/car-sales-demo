<?php
require 'data.php';

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