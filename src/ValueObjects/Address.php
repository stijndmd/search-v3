<?php

namespace CultuurNet\SearchV3\ValueObjects;

use JMS\Serializer\Annotation\Type;

class Address
{

    /**
     * @var string
     * @Type("string")
     */
    protected $addressCountry;

    /**
     * @var string
     * @Type("string")
     */
    protected $addressLocality;

    /**
     * @var string
     * @Type("string")
     */
    protected $postalCode;

    /**
     * @var string
     * @Type("string")
     */
    protected $streetAddress;

    /**
     * @return string
     */
    public function getAddressCountry() {
        return $this->addressCountry;
    }

    /**
     * @param string $addressCountry
     * @return Address
     */
    public function setAddressCountry($addressCountry) {
        $this->addressCountry = $addressCountry;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddressLocality() {
        return $this->addressLocality;
    }

    /**
     * @param string $addressLocality
     * @return Address
     */
    public function setAddressLocality($addressLocality) {
        $this->addressLocality = $addressLocality;

        return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode() {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     * @return Address
     */
    public function setPostalCode($postalCode) {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getStreetAddress() {
        return $this->streetAddress;
    }

    /**
     * @param string $streetAddress
     * @return Address
     */
    public function setStreetAddress($streetAddress) {
        $this->streetAddress = $streetAddress;

        return $this;
    }

}