<?php

namespace CultuurNet\SearchV3\ValueObjects;

use DateTime;
use JMS\Serializer\Annotation\Type;

final class BookingInfo
{
    /**
     * @var string|null
     * @Type("string")
     */
    private $phone;

    /**
     * @var string|null
     * @Type("string")
     */
    private $email;

    /**
     * @var string|null
     * @Type("string")
     */
    private $url;

    /**
     * @var TranslatedString|null
     * @Type("CultuurNet\SearchV3\ValueObjects\TranslatedString")
     */
    private $urlLabel;

    /**
     * @var DateTime|null
     * @Type("DateTime")
     */
    private $availabilityStarts;

    /**
     * @var DateTime|null
     * @Type("DateTime")
     */
    private $availabilityEnds;

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;
        return $this;
    }

    public function getUrlLabel(): ?TranslatedString
    {
        return $this->urlLabel;
    }

    public function setUrlLabel(TranslatedString $urlLabel): self
    {
        $this->urlLabel = $urlLabel;
        return $this;
    }

    public function getAvailabilityStarts(): ?DateTime
    {
        return $this->availabilityStarts;
    }

    public function setAvailabilityStarts(DateTime $availabilityStarts): self
    {
        $this->availabilityStarts = $availabilityStarts;
        return $this;
    }

    public function getAvailabilityEnds(): ?DateTime
    {
        return $this->availabilityEnds;
    }

    public function setAvailabilityEnds(DateTime $availabilityEnds): self
    {
        $this->availabilityEnds = $availabilityEnds;
        return $this;
    }
}
