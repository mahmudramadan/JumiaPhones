<?php

declare(strict_types=1);

namespace App;

use App\Repository\CustomerRepository;
use App\Service\CustomerService;
use SQLite3;

/**
 * CustomersDataService
 *
 * @package App  
 */
class CustomersDataService
{
    /**
     * customers array 
     *
     * @var array $customers
     */
    protected $customers;
    protected $country;
    protected $phoneState;

    public function __construct(array $customersData, string $country, string $phoneState)
    {
        $this->customers = $customersData;
        $this->country = $country;
        $this->phoneState = $phoneState;
    }
    public function getCustomerPhoneData()
    {
        if (count($this->customers) > 0) {
            $apiRepository = new CustomerRepository($this->customers);
            $customersDataObjects = $apiRepository->getCustomersData();

            $customerService = new CustomerService();
            $filteredCusomerData = $customerService->getCustomerData($customersDataObjects, $this->country, $this->phoneState);
            return $filteredCusomerData;
        }
        return false;
    }
}