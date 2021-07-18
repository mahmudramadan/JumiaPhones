<?php

declare(strict_types=1);

namespace Entity;

use App\Base\BasePhoneValidation;
use App\Entity\Customer;
use PHPUnit\Framework\TestCase;

/**
 * RoomTest
 * test setter and getter of room data 
 */
final class CustomerTest extends TestCase
{

    private $customer;
    /**
     * test setter functions
     */
    protected function setUp(): void
    {
        $this->customer = new Customer();
        $this->customer->setName("Mahmoud Ramadan");
        $this->customer->setPhone('691816558');
        $this->customer->setCountry('Cameroon');
        $this->customer->setPhoneState(BasePhoneValidation::PHONE_STATE_OK);
        $this->customer->setCountryCode('+237');
    }
    /**
     * test Getter functions
     */
    public function testGetter(): void
    {
        self::assertSame("Mahmoud Ramadan", $this->customer->getName());
        self::assertSame("691816558", $this->customer->getPhone());
        self::assertSame("Cameroon", $this->customer->getCountry());
        self::assertSame(BasePhoneValidation::PHONE_STATE_OK, $this->customer->getPhoneState());
        self::assertSame("+237", $this->customer->getCountryCode());
    }
}