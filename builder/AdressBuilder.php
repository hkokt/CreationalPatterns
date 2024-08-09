<?php

namespace Builder;

class AddressBuilder
{
    public Address $address;

    public function __construct()
    {
        $this->address = new Address();
    }

    public function street(string $street): self
    {
        $this->address->setStreet($street);
        return $this;
    }

    public function city(string $city): self
    {
        $this->address->setCity($city);
        return $this;
    }

    public function zip(string $zip): self
    {
        $this->address->setZip($zip);
        return $this;
    }

    public function build(): Address
    {
        return $this->address;
    }

}