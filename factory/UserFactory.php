<?php

namespace Factory;

use \ErrorException;

class UserFactory
{
    private function __construct()
    {
    }

    public static function create(string $username, string $email): User
    {
        $patternEmail = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';

        if (!preg_match($patternEmail, $email)) {
            throw new ErrorException('Invalid email format.');
        }

        return new User($username, $email);
    }
}