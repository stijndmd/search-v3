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
}
