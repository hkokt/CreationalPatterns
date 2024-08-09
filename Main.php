<?php

require_once 'vendor/autoload.php';

use Factory\UserFactory;

$factoryTest = UserFactory::create("userTest", "user@test.com");

var_dump($factoryTest);