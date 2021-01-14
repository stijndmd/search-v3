<?php

namespace CultuurNet\SearchV3\ValueObjects;

use PHPUnit\Framework\TestCase;

class BookingInfoTest extends TestCase
{
    /**
     * @var BookingInfo
     */
    protected $bookingInfo;

    public function setUp(): void
    {
        $this->bookingInfo = new BookingInfo();
    }

    public function testGetPhoneMethod(): void
    {
        $this->bookingInfo->setPhone('0123456789');

        $result = $this->bookingInfo->getPhone();
        self::assertEquals('0123456789', $result);
    }

    public function testGetEmailMethod(): void
    {
        $this->bookingInfo->setEmail('email@gmail.com');

        $result = $this->bookingInfo->getEmail();
        self::assertEquals('email@gmail.com', $result);
    }

    public function testGetUrlMethod(): void
    {
        $this->bookingInfo->setUrl('bookingUrl.com');

        $result = $this->bookingInfo->getUrl();
        self::assertEquals('bookingUrl.com', $result);
    }

    public function testGetUrlLabelMethod(): void
    {
        $urlLabel = new TranslatedString(['nl' => 'Koop tickets']);
        $this->bookingInfo->setUrlLabel($urlLabel);

        $result = $this->bookingInfo->getUrlLabel();
        self::assertInstanceOf('CultuurNet\SearchV3\ValueObjects\TranslatedString', $result);
        self::assertEquals($urlLabel, $result);
    }
}
