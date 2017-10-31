<?php

namespace CultuurNet\SearchV3\ValueObjects;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Value object for contact point information
 */
class ContactPoint
{

    /**
     * @var array
     * @Type("array<string>")
     * @SerializedName("email")
     */
    protected $emails = [];

    /**
     * @var array
     * @Type("array<string>")
     * @SerializedName("phone")
     */
    protected $phoneNumbers = [];

    /**
     * @var array
     * @Type("array<string>")
     * @SerializedName("url")
     */
    protected $urls = [];

    /**
     * @return array
     */
    public function getEmails()
    {
        return $this->emails;
    }

    /**
     * @param array $emails
     * @return ContactPoint
     */
    public function setEmails($emails)
    {
        $this->emails = $emails;
        return $this;
    }

    /**
     * @return array
     */
    public function getPhoneNumbers()
    {
        return $this->phoneNumbers;
    }

    /**
     * @param array $phoneNumbers
     * @return ContactPoint
     */
    public function setPhoneNumbers($phoneNumbers)
    {
        $this->phoneNumbers = $phoneNumbers;
        return $this;
    }

    /**
     * @return array
     */
    public function getUrls()
    {
        return $this->urls;
    }

    /**
     * @param array $urls
     * @return ContactPoint
     */
    public function setUrls($urls)
    {
        $this->urls = $urls;
        return $this;
    }
}
