<?php

declare(strict_types=1);

namespace App\Entity;

/** 
 * Customer
 * Customer properity like name and phone ...etc
 * @package App\Entity  
 */
class Customer
{
    // private static $instances = [];
    // public static function getInstance(): Customer
    //   {
    // // $cls = static::class;
    // if (!isset(self::$instances[$cls])) {
    // self::$instances[$cls] = new static();
    //    }
    // // return self::$instances[$cls];
    //}
    // 
    /**
     * Customer country code
     *
     * @var string $countryCode
     */
    protected $countryCode;

    /**
     * Customer country 
     *
     * @var string $country
     */
    protected $country;

    /**
     * Customer name
     *
     * @var string $name
     */
    protected $name;

    /**
     * Customer phone
     *
     * @var string $phone
     */
    protected $phone;

    /**
     * Customer phone State
     *
     * @var bool $phoneState
     */
    protected $phoneState;

    /**
     * Set country Code
     *
     * @param string $countryCode
     */
    public function setCountryCode(string $countryCode)
    {
        $this->countryCode = $countryCode;
    }
    /**
     * Get country Code
     *
     * @return string $countryCode
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * Set Customer country
     *
     * @param string $country
     */
    public function setCountry(string $country)
    {
        $this->country = $country;
    }
    /**
     * Get Customer country
     *
     * @return string $country
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * Set Customer name
     *
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }
    /**
     * Get Customer net price
     *
     * @return string $name
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Set Customer phone
     *
     * @param string $phone
     */
    public function setPhone(string $phone)
    {
        $this->phone = $phone;
    }
    /**
     * Get Customer phone
     *
     * @return string $phone
     */
    public function getPhone(): string
    {
        return $this->phone;
    }
    /**
     * Set Customer phoneState
     *
     * @param string $phoneState
     */
    public function setPhoneState(string $phoneState)
    {
        $this->phoneState = $phoneState;
    }
    /**
     * Get Customer phoneState
     *
     * @return string $phoneState
     */
    public function getPhoneState()
    {
        return $this->phoneState;
    }
}