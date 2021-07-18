<?php

declare(strict_types=1);

namespace App\Service;

use App\Base\BasePhoneValidation;

/**
 * PhoneService
 *
 * @package App\Service  
 */

class CustomerService implements CustomerInterface
{
    /**
     * Get customers with phone depend on country or valid phones  
     *
     * @param array $customersData
     * @param string $country
     * @param string $phoneState
     * @return array
     */

    public function getCustomerData($customersData, $searchCountry, $searchPhoneState)
    {
        $finalCustomersData = [];
        foreach ($customersData as $customerItem) {
            $country = $customerItem->getCountry();
            $phoneState = $customerItem->getPhoneState();
            $checkSearch = $this->checkCountryAndPhoneState($country, $phoneState, $searchCountry, $searchPhoneState);
            if ($checkSearch) {
                $customerItemData['country'] = $country;
                $customerItemData['phoneState'] = $phoneState;
                $customerItemData['phone'] = $customerItem->getPhone();
                $customerItemData['name'] = $customerItem->getName();
                $customerItemData['countryCode'] = $customerItem->getCountryCode();
                array_push($finalCustomersData, $customerItemData);
            }
        }
        return $finalCustomersData;
    }

    public function checkCountryAndPhoneState($country, $phoneState, $searchCountry, $searchPhoneState)
    {
        switch (true) {
            case ($searchCountry == BasePhoneValidation::ALL_COUNTRY && $searchPhoneState == BasePhoneValidation::ALL_PHONE_STATE):
                return TRUE;
                break;
            case ($searchCountry == BasePhoneValidation::ALL_COUNTRY && $searchPhoneState == $phoneState):
                return TRUE;
                break;
            case ($searchCountry == $country && $searchPhoneState == BasePhoneValidation::ALL_PHONE_STATE):
                return TRUE;
                break;
            case ($searchCountry == $country && $searchPhoneState == $phoneState):
                return TRUE;
                break;
            default:
                return FALSE;
                break;
        }
    }
}