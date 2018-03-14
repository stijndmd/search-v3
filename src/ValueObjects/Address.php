<?php

namespace CultuurNet\SearchV3\ValueObjects;

class Address
{

    /**
     * @var string
     */
    protected $addressCountry;

    /**
     * @var string
     */
    protected $addressLocality;

    /**
     * @var string
     */
    protected $postalCode;

    /**
     * @var string
     */
    protected $streetAddress;

    /**
     * Address constructor.
     * @param string $addressCountry
     * @param string $addressLocality
     * @param string $postalCode
     * @param string $streetAddress
     */
    public function __construct($addressCountry = null, $addressLocality = null, $postalCode = null, $streetAddress = null)
    {
        $this->addressCountry = $addressCountry;
        $this->addressLocality = $addressLocality;
        $this->postalCode = $postalCode;
        $this->streetAddress = $streetAddress;
    }


    /**
     * @return string
     */
    public function getAddressCountry()
    {
        return $this->addressCountry;
    }

    /**
     * @param string $addressCountry
     * @return Address
     */
    public function setAddressCountry($addressCountry)
    {
        $this->addressCountry = $addressCountry;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddressLocality()
    {
        return $this->addressLocality;
    }

    /**
     * @param string $addressLocality
     * @return Address
     */
    public function setAddressLocality($addressLocality)
    {
        $this->addressLocality = $addressLocality;

        return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     * @return Address
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getStreetAddress()
    {
        return $this->streetAddress;
    }

    /**
     * @param string $streetAddress
     * @return Address
     */
    public function setStreetAddress($streetAddress)
    {
        $this->streetAddress = $streetAddress;

        return $this;
    }
}
