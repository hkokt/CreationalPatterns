<?php

use PHPUnit\Framework\TestCase;
use Factory\UserFactory;
use Factory\User;

class FactoryTests extends TestCase
{
    public function testCreateUserWithValidEmail(): void
    {
        $user = UserFactory::create('testuser', 'testuser@example.com');
        $this->assertInstanceOf(User::class, $user);
    }

    public function testCreateUserWithInvalidEmail(): void
    {
        $this->expectExceptionMessage('Invalid email format.');
        UserFactory::create('testuser', 'invalid-email');
    }
}