<?php

namespace Factory;

class User
{

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    private $name;
    private $email;

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}