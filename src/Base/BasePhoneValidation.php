<?php

declare(strict_types=1);

namespace App\Base;

class BasePhoneValidation
{
    /**
     * phone state NOK Country Name
     */
    public const VALIDATORS =  [
        'Cameroon' => [
            'code' => '+237',
            'regex' => '\(237\)\ ?[2368]\d{7,8}$'
        ],
        'Ethiopia' => [
            'code' => '+251',
            'regex' => '\(251\)\ ?[1-59]\d{8}$'
        ],
        'Morocco' => [
            'code' => '+212',
            'regex' => '\(212\)\ ?[5-9]\d{8}$'
        ],
        'Mozambique' => [
            'code' => '+258',
            'regex' => '\(258\)\ ?[28]\d{7,8}$'
        ],
        'Uganda' => [
            'code' => '+256',
            'regex' => '\(256\)\ ?\d{9}$'
        ]
    ];
    public const ALL_COUNTRY = 'all';
    public const ALL_PHONE_STATE = 'all';
    public const COUNTRY_UN_KNOWN = 'Un Known';
    public const PHONE_STATE_OK = 'OK';
    public const PHONE_STATE_NOK = 'NOK';
}