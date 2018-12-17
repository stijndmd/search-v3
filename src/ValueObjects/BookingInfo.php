<?php

namespace CultuurNet\SearchV3\ValueObjects;

use JMS\Serializer\Annotation\Type;

/**
 * Provides a booking info value object.
 */
class BookingInfo
{

    /**
     * @var string
     * @Type("string")
     */
    protected $phone;

    /**
     * @var string
     * @Type("string")
     */
    protected $email;

    /**
     * @var string
     * @Type("string")
     */
    protected $url;

    /**
     * @var TranslatedString
     * @Type("CultuurNet\SearchV3\ValueObjects\TranslatedString")
     */
    protected $urlLabel;

    /**
     * @var \DateTime
     * @Type("DateTime")
     */
    protected $availabilityStarts;

    /**
     * @var \DateTime
     * @Type("DateTime")
     */
    protected $availabilityEnds;

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     * @return BookingInfo
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return BookingInfo
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return BookingInfo
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return TranslatedString
     */
    public function getUrlLabel()
    {
        return $this->urlLabel;
    }

    /**
     * @param TranslatedString $urlLabel
     * @return BookingInfo
     */
    public function setUrlLabel($urlLabel)
    {
        $this->urlLabel = $urlLabel;
        return $this;
    }

    /**
    * @return \DateTime
    */
    public function getAvailabilityStarts()
    {
        return $this->availabilityStarts;
    }

    /**
    * @param \DateTime $availabilityStarts
    * @return BookingInfo
    */
    public function setAvailabilityStarts($availabilityStarts)
    {
        $this->availabilityStarts = $availabilityStarts;
        return $this;
    }

    /**
    * @return \DateTime
    */
    public function getAvailabilityEnds()
    {
        return $this->availabilityEnds;
    }

    /**
    * @param \DateTime $availabilityEnds
    * @return BookingInfo
    */
    public function setAvailabilityEnds($availabilityEnds)
    {
        $this->availabilityEnds = $availabilityEnds;
        return $this;
    }
}
