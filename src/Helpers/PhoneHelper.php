<?php

declare(strict_types=1);

namespace App\Helpers;

use App\Base\BasePhoneValidation;

class PhoneHelper
{
    public function getPhoneValidateData($phone)
    {
        foreach (BasePhoneValidation::VALIDATORS as $key => $validator) {
            preg_match('/' . $validator['regex'] . '/', $phone, $matches);
            if (sizeof($matches) > 0) {
                $returnData['country'] = $key;
                $returnData['state'] = BasePhoneValidation::PHONE_STATE_OK;
                $returnData['countryCode'] = $validator['code'];
                return $returnData;
            }
        }
        return false;
    }
}