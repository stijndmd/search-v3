<?php

namespace CultuurNet\SearchV3\ValueObjects;

use PHPUnit\Framework\TestCase;

class OrganizerTest extends TestCase
{
    /**
     * @var Organizer
     */
    protected $organizer;

    public function setUp()
    {
        $this->organizer = new Organizer();
    }

    public function testGetIdMethod()
    {
        $this->organizer->setId('organizer id');

        $result = $this->organizer->getId();
        $this->assertEquals('organizer id', $result);
    }

    public function testGetCdbidMethod()
    {
        $this->organizer->setId('this/is/an/organizer-id');

        $result = $this->organizer->getCdbid();
        $this->assertEquals('organizer-id', $result);
    }

    public function testGetAndSetNameMethods()
    {
        $name = new TranslatedString(['nl' => 'organizer name']);
        $this->organizer->setName($name);
        $this->assertEquals($name, $this->organizer->getName());
    }

    public function testGetEmailMethod()
    {
        $this->organizer->setEmail(array('test@organizer.com'));

        $result = $this->organizer->getEmail();
        $this->assertEquals(array('test@organizer.com'), $result);
    }

    public function testGetContactPointMehtod()
    {
        $contactPoint = new ContactPoint();
        $contactPoint->setEmails(array('info@publiq.be'));
        $contactPoint->setUrls(array('google.be'));
        $contactPoint->setPhoneNumbers(array('1234567890'));
        $this->organizer->setContactPoint($contactPoint);

        $result = $this->organizer->getContactPoint();
        $this->assertEquals($contactPoint, $result);
    }

    public function testGetHiddenLabelsMethod()
    {
        $this->organizer->setHiddenLabels(array('hidden1', 'hidden2'));

        $result = $this->organizer->getHiddenLabels();
        $this->assertEquals(array('hidden1', 'hidden2'), $result);
    }
}
