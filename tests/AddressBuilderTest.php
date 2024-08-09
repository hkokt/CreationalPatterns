<?php

use PHPUnit\Framework\TestCase;
use Builder\Address;
use Builder\AddressBuilder;

class AddressBuilderTest extends TestCase
{
    public function testBuildAddress()
    {
        $addressBuilder = new AddressBuilder();
        $address = $addressBuilder
            ->street('123 Main St')
            ->city('Anytown')
            ->zip('12345')
            ->build();

        $this->assertInstanceOf(Address::class, $address);
        $this->assertEquals('123 Main St', $address->getStreet());
        $this->assertEquals('Anytown', $address->getCity());
        $this->assertEquals('12345', $address->getZip());
    }
}