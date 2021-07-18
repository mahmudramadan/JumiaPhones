<?php

declare(strict_types=1);

use App\Base\BasePhoneValidation;
use App\Entity\Customer;
use App\Helpers\PhoneHelper;
use PHPUnit\Framework\TestCase;

final class PhoneTest extends TestCase
{

    /**
     * Test Calculate phoneState , average ,square phoneState
     *
     * @dataProvider phoneStateOkProvoder
     * @dataProvider phoneStateNokProvoder
     * @param $phone
     * @param $country
     * @param $phoneState
     * @return void
     * @throws \Exception
     */
    public function testData($phone, $country, $phoneState): void
    {

        $phoneArray = explode(" ", $phone);
        $customer = new Customer();
        $phoneHelper = new PhoneHelper();
        $phoneData = $phoneHelper->getPhoneValidateData($phone);

        $customer->setPhone(end($phoneArray));
        $customer->setCountry($phoneData ? $phoneData['country'] : BasePhoneValidation::COUNTRY_UN_KNOWN);
        $customer->setPhoneState($phoneData ? $phoneData['state'] : BasePhoneValidation::PHONE_STATE_NOK);
        self::assertEquals(end($phoneArray), $customer->getPhone());
        self::assertEquals($country, $customer->getCountry());
        self::assertEquals($phoneState, $customer->getPhoneState());
    }
    /**
     * @return array
     * @throws \Exception
     */
    public function phoneStateOkProvoder(): array
    {
        return [

            [
                "phone" => "(212) 698054317",
                "country" => "Morocco",
                "phoneState" => "OK",
            ],
            [
                "phone" => "(212) 691933626",
                "country" => "Morocco",
                "phoneState" => "OK",
            ],
            [
                "phone" => "(212) 633963130",
                "country" => "Morocco",
                "phoneState" => "OK",
            ],
            [
                "phone" => "(212) 654642448",
                "country" => "Morocco",
                "phoneState" => "OK",
            ],

            [
                "phone" => "(258) 846565883",
                "country" => "Mozambique",
                "phoneState" => "OK",
            ],
            [
                "phone" => "(258) 847602609",
                "country" => "Mozambique",
                "phoneState" => "OK",
            ],
            [
                "phone" => "(237) 696443597",
                "country" => "Cameroon",
                "phoneState" => "OK",
            ],
        ];
    }
    /**
     * @return array
     * @throws \Exception
     */
    public function phoneStateNokProvoder(): array
    {
        return [
            [
                "phone" => "(237) 6622284920",
                "country" => "Un Known",
                "phoneState" => "NOK",
            ], [
                "phone" => "(212) 6780009592",
                "country" => "Un Known",
                "phoneState" => "NOK",
            ], [
                "phone" => "(212) 6007989253",
                "country" => "Un Known",
                "phoneState" => "NOK",
            ],
            [
                "phone" => "(212) 6546545369",
                "country" => "Un Known",
                "phoneState" => "NOK",
            ],
            [
                "phone" => "(258) 84330678235",
                "country" => "Un Known",
                "phoneState" => "NOK",
            ]

        ];
    }
}