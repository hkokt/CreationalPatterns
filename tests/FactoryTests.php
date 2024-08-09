<?php

use PHPUnit\Framework\TestCase;
use Factory\UserFactory;
use Factory\User;

class FactoryTests extends TestCase
{
    public function testCreateUserWithValidEmail(): void
    {
        $username = 'testuser';
        $email = 'testuser@example.com';
        $user = UserFactory::create($username, $email);

        $this->assertInstanceOf(User::class, $user);
        $this->assertEquals($email, $user->getEmail());
        $this->assertEquals($username, $user->getName());
    }

    public function testCreateUserWithInvalidEmail(): void
    {
        $this->expectExceptionMessage('Invalid email format.');
        UserFactory::create('testuser', 'invalid-email');
    }

}