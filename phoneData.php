<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use App\Base\BasePhoneValidation;
use App\CustomersDataService;
use App\DB\QueryBuilder;

$db = new QueryBuilder();
$data = $db->getData('customer', 'name,phone');
$country = $_GET['country'] ? strip_tags($_GET['country']) : BasePhoneValidation::ALL_COUNTRY;
$phoneState = $_GET['phoneState'] ? strip_tags($_GET['phoneState']) :  BasePhoneValidation::ALL_PHONE_STATE;
$customerData = new CustomersDataService($data, $country, $phoneState);
$phonesData = $customerData->getCustomerPhoneData();
require __DIR__ . '/resources/views/reportData.php';