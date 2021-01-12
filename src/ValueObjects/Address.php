<?php

namespace CultuurNet\SearchV3\ValueObjects;

final class Address
{
    /**
     * @var string
     */
    private $addressCountry;

    /**
     * @var string
     */
    private $addressLocality;

    /**
     * @var string
     */
    private $postalCode;

    /**
     * @var string
     */
    private $streetAddress;

    public function __construct(
        string $addressCountry = null,
        string $addressLocality = null,
        string $postalCode = null,
        string $streetAddress = null
    ) {
        $this->addressCountry = $addressCountry;
        $this->addressLocality = $addressLocality;
        $this->postalCode = $postalCode;
        $this->streetAddress = $streetAddress;
    }

    public function getAddressCountry(): string
    {
        return $this->addressCountry;
    }

    public function setAddressCountry(string $addressCountry): self
    {
        $this->addressCountry = $addressCountry;
        return $this;
    }

    public function getAddressLocality(): string
    {
        return $this->addressLocality;
    }

    public function setAddressLocality(string $addressLocality): self
    {
        $this->addressLocality = $addressLocality;
        return $this;
    }

    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    public function setPostalCode(string $postalCode): self
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    public function getStreetAddress(): string
    {
        return $this->streetAddress;
    }

    public function setStreetAddress(string $streetAddress): self
    {
        $this->streetAddress = $streetAddress;
        return $this;
    }
}
