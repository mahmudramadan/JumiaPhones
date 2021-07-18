<?php

declare(strict_types=1);

namespace App\Repository;

/** 
 * ApiService
 * get all data from api link 
 * @package App\Repository  
 */

use App\Base\BasePhoneValidation;
use App\Entity\Customer;
use App\Helpers\PhoneHelper;

class CustomerRepository
{
    /**
     * customersData conatin all cuttomers data 
     * @var $customersData
     */
    protected $customersData;

    public function __construct(array $data)
    {
        $this->customersData = $data;
    }
    /**
     * Return All Rooms after setting properties
     *
     * @return array $Rooms
     */
    public function getCustomersData(): array
    {
        $phoneHelper = new PhoneHelper();

        $customers = [];
        foreach ($this->customersData as $customerItem) {
            $phoneData = $phoneHelper->getPhoneValidateData($customerItem['phone']);
            $phoneArray = explode(' ', $customerItem['phone']);
            $customer = new Customer();
            $customer->setName($customerItem['name']);
            $customer->setPhone(end($phoneArray));
            $customer->setCountry($phoneData ? $phoneData['country'] : BasePhoneValidation::COUNTRY_UN_KNOWN);
            $customer->setPhoneState($phoneData ? $phoneData['state'] : BasePhoneValidation::PHONE_STATE_NOK);
            $customer->setCountryCode($phoneData ? $phoneData['countryCode'] : $this->getCountryCode($phoneArray[0]));
            $customers[] = $customer;
        }
        return $customers;
    }

    public function getCountryCode(string $code)
    {
        return "+" . str_replace("(", "", str_replace(")", "", $code));
    }
}