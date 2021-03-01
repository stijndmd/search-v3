<?php

declare(strict_types=1);

namespace CultuurNet\SearchV3\ValueObjects;

use PHPUnit\Framework\TestCase;

class OrganizerTest extends TestCase
{
    /**
     * @var Organizer
     */
    protected $organizer;

    public function setUp(): void
    {
        $this->organizer = new Organizer();
    }

    public function testGetIdMethod(): void
    {
        $this->organizer->setId('organizer id');

        $result = $this->organizer->getId();
        $this->assertEquals('organizer id', $result);
    }

    public function testGetCdbidMethod(): void
    {
        $this->organizer->setId('this/is/an/organizer-id');

        $result = $this->organizer->getCdbid();
        $this->assertEquals('organizer-id', $result);
    }

    public function testGetAndSetNameMethods(): void
    {
        $name = new TranslatedString(['nl' => 'organizer name']);
        $this->organizer->setName($name);
        $this->assertEquals($name, $this->organizer->getName());
    }

    public function testGetEmailMethod(): void
    {
        $this->organizer->setEmail(array('test@organizer.com'));

        $result = $this->organizer->getEmail();
        $this->assertEquals(array('test@organizer.com'), $result);
    }

    public function testGetContactPointMehtod(): void
    {
        $contactPoint = new ContactPoint();
        $contactPoint->setEmails(array('info@publiq.be'));
        $contactPoint->setUrls(array('google.be'));
        $contactPoint->setPhoneNumbers(array('1234567890'));
        $this->organizer->setContactPoint($contactPoint);

        $result = $this->organizer->getContactPoint();
        $this->assertEquals($contactPoint, $result);
    }

    public function testGetHiddenLabelsMethod(): void
    {
        $this->organizer->setHiddenLabels(array('hidden1', 'hidden2'));

        $result = $this->organizer->getHiddenLabels();
        $this->assertEquals(array('hidden1', 'hidden2'), $result);
    }
}
