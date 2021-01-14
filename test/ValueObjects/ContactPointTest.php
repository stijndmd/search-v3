<?php

namespace CultuurNet\SearchV3\ValueObjects;

use PHPUnit\Framework\TestCase;

class ContactPointTest extends TestCase
{
    /**
     * @var ContactPoint
     */
    protected $contactPoint;

    public function setUp(): void
    {
        $this->contactPoint = new ContactPoint();
    }

    public function testGetEmailsMethod(): void
    {
        $emails = array('email1@gmail.com', 'email2@gmail.com');
        $this->contactPoint->setEmails($emails);

        $result = $this->contactPoint->getEmails();
        $this->assertEquals($emails, $result);
    }

    public function testGetPhoneNumbersMethod(): void
    {
        $phones = array('1234567890', '0987654321');
        $this->contactPoint->setPhoneNumbers($phones);

        $result = $this->contactPoint->getPhoneNumbers();
        $this->assertEquals($phones, $result);
    }

    public function testGetUrlsMethod(): void
    {
        $urls = array('http://google.com', 'http://yahoo.com');
        $this->contactPoint->setUrls($urls);

        $result = $this->contactPoint->getUrls();
        $this->assertEquals($urls, $result);
    }
}
