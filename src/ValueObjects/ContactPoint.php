<?php

namespace CultuurNet\SearchV3\ValueObjects;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class ContactPoint
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

    public function getEmails(): array
    {
        return $this->emails;
    }

    public function setEmails(array $emails): self
    {
        $this->emails = $emails;
        return $this;
    }

    public function getPhoneNumbers(): array
    {
        return $this->phoneNumbers;
    }

    public function setPhoneNumbers(array $phoneNumbers): self
    {
        $this->phoneNumbers = $phoneNumbers;
        return $this;
    }

    public function getUrls(): array
    {
        return $this->urls;
    }

    public function setUrls(array $urls): self
    {
        $this->urls = $urls;
        return $this;
    }
}
