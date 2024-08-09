<?php

namespace Builder;

class Address
{
    private $street;
    private $city;
    private $zip;

    public function __construct()
    {
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getZip(): string
    {
        return $this->zip;
    }


    public function setStreet($street)
    {
        $this->street = $street;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function setZip($zip)
    {
        $this->zip = $zip;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
    }
}