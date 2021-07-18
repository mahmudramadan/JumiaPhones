<?php

declare(strict_types=1);

namespace App\Service;

/**
 * CustomerInterface
 *
 * @package App\Service  
 */
interface CustomerInterface
{
    /**
     * Get customers with phone depend on country or valid phones  
     *
     * @param array $customersData
     * @param string $country
     * @param string $phoneState
     * @return array
     */
    public function getCustomerData(array $customersData, string $country, string $phoneState);
}