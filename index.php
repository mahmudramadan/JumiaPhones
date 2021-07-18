<?php

declare(strict_types=1);

use App\Base\BasePhoneValidation;

require __DIR__ . '/vendor/autoload.php';

$ALL_COUNTRY = BasePhoneValidation::ALL_COUNTRY;
$ALL_PHONE_STATE = BasePhoneValidation::ALL_PHONE_STATE;
$PHONE_STATE_OK = BasePhoneValidation::PHONE_STATE_OK;
$PHONE_STATE_NOK = BasePhoneValidation::PHONE_STATE_NOK;
define('BASE_URL', 'http://localhost/JumiaPhones/');

require __DIR__ . '/resources/views/phones.php';