<?php

namespace CultuurNet\SearchV3\ValueObjects;

use PHPUnit\Framework\TestCase;

class PlaceTest extends TestCase
{
    /**
     * @var Place
     */
    protected $place;

    public function setUp(): void
    {
        $this->place = new Place();
    }

    public function testGetAddressMethod(): void
    {
        $mockAddress = new TranslatedAddress();
        $this->place->setAddress($mockAddress);

        $result = $this->place->getAddress();
        self::assertInstanceOf(TranslatedAddress::class, $result);
    }

    public function testGetGeoMethod(): void
    {
        $mockGeo = new GeoPoint();
        $this->place->setGeo($mockGeo);

        $result = $this->place->getGeo();
        self::assertInstanceOf(GeoPoint::class, $result);
    }

    /**
     * Test the abstract class methods
     */

    public function testGetIdMethod(): void
    {
        $this->place->setId('place-id');

        $result = $this->place->getId();
        self::assertEquals('place-id', $result);
    }

    public function testGetCdbidMethod(): void
    {
        $this->place->setId('this/is/a/cdbid');

        $result = $this->place->getCdbid();
        self::assertEquals('cdbid', $result);
    }

    public function testGetMainLanguageMethod(): void
    {
        $this->place->setMainLanguage('nl');

        $result = $this->place->getMainLanguage();
        self::assertEquals('nl', $result);
    }

    public function testGetNameMethod(): void
    {

        $name = new TranslatedString(['nl' => 'name']);
        $this->place->setName($name);
        self::assertEquals($name, $this->place->getName());
    }

    public function testGetDescriptionMethod(): void
    {
        $description = new TranslatedString(['nl' => 'description']);

        $this->place->setDescription($description);
        self::assertEquals($description, $this->place->getDescription());
    }

    public function testGetCalendarTypeMethod(): void
    {
        $this->place->setCalendarType('multiple');

        $result = $this->place->getCalendarType();
        self::assertEquals('multiple', $result);
    }

    public function testGetCalendarSummaryMethod(): void
    {
        $this->place->setCalendarSummary('cal sum');

        $result = $this->place->getCalendarSummary();
        self::assertEquals('cal sum', $result);
    }

    public function testGetCreatorMethod(): void
    {
        $this->place->setCreator('that\'s me!');

        $result = $this->place->getCreator();
        self::assertEquals('that\'s me!', $result);
    }

    public function testGetCreatedMethod(): void
    {
        $this->place->setCreated(new \DateTime('21-11-2017'));

        $result = $this->place->getCreated();
        self::assertEquals(new \DateTime('21-11-2017'), $result);
    }

    public function testGetModifiedMethod(): void
    {
        $this->place->setModified(new \DateTime('25-11-2017'));

        $result = $this->place->getModified();
        self::assertEquals(new \DateTime('25-11-2017'), $result);
    }

    public function testGetPublisherMethod(): void
    {
        $this->place->setPublisher('publisher name');

        $result = $this->place->getPublisher();
        self::assertEquals('publisher name', $result);
    }

    public function testGetTypicalAgeRangeMethod(): void
    {
        $this->place->setTypicalAgeRange('9 - 11 jaar');

        $result = $this->place->getTypicalAgeRange();
        self::assertEquals('9 - 11 jaar', $result);
    }

    public function testGetPerformersMethod(): void
    {
        $this->place->setPerformers(array(new Performer('performer name')));

        $result = $this->place->getPerformers();
        self::assertEquals(array(new Performer('performer name')), $result);
    }

    public function testGetImageMethod(): void
    {
        $this->place->setImage('http://path-to-image.com');

        $result = $this->place->getImage();
        self::assertEquals('http://path-to-image.com', $result);
    }

    public function testGetMediaObjectsMethod(): void
    {
        $mockMediaObject = new MediaObject();
        $this->place->setMediaObjects(array($mockMediaObject));

        $result = $this->place->getMediaObjects();
        self::assertEquals(array($mockMediaObject), $result);
    }

    public function testGetMainMediaObjectMethod(): void
    {
        $this->place->setImage('http://path-to-image.com');

        $mockMediaObject = new MediaObject();
        $mockMediaObject->setContentUrl('http://path-to-image.com');
        $this->place->setMediaObjects(array($mockMediaObject));

        $result = $this->place->getMainMediaObject();
        self::assertEquals($mockMediaObject, $result);
    }

    public function testGetOrganizerMethod(): void
    {
        $mockOrganizer = new Organizer();
        $this->place->setOrganizer($mockOrganizer);

        $result = $this->place->getOrganizer();
        self::assertEquals($mockOrganizer, $result);
    }

    public function testGetLabelsMethod(): void
    {
        $this->place->setLabels(array('label1', 'label2'));

        $result = $this->place->getLabels();
        self::assertEquals(array('label1', 'label2'), $result);
    }

    public function testGetHiddenLabelsMethod(): void
    {
        $this->place->setHiddenLabels(array('hidden1', 'hidden2'));

        $result = $this->place->getHiddenLabels();
        self::assertEquals(array('hidden1', 'hidden2'), $result);
    }

    public function testGetStartDateMethod(): void
    {
        $this->place->setStartDate(new \DateTime('01-01-2017'));

        $result = $this->place->getStartDate();
        self::assertEquals(new \DateTime('01-01-2017'), $result);
    }

    public function testGetEndDateMethod(): void
    {
        $this->place->setEndDate(new \DateTime('31-12-2017'));

        $result = $this->place->getEndDate();
        self::assertEquals(new \DateTime('31-12-2017'), $result);
    }

    public function testGetTermsMethod(): void
    {
        $mockTerm1 = new Term();
        $mockTerm1->setId('1');
        $mockTerm1->setLabel('term-label');
        $mockTerm1->setDomain('testDomain');

        $mockTerm2 = new Term();
        $mockTerm2->setId('2');
        $mockTerm2->setLabel('term-label');
        $mockTerm2->setDomain('testOtherDomain');

        $this->place->setTerms(array($mockTerm1, $mockTerm2));

        $result = $this->place->getTerms();
        self::assertEquals(array($mockTerm1, $mockTerm2), $result);
    }

    public function testGetTermsByDomainMethod(): void
    {
        $mockTerm1 = new Term();
        $mockTerm1->setId('1');
        $mockTerm1->setLabel('term-label');
        $mockTerm1->setDomain('testDomain');

        $mockTerm2 = new Term();
        $mockTerm2->setId('2');
        $mockTerm2->setLabel('term-label');
        $mockTerm2->setDomain('testOtherDomain');

        $this->place->setTerms(array($mockTerm1, $mockTerm2));

        $result = $this->place->getTermsByDomain('testDomain');
        self::assertEquals(array($mockTerm1), $result);
    }

    public function testGetContactPointMethod(): void
    {
        $mockContactPoint = new ContactPoint();
        $this->place->setContactPoint($mockContactPoint);

        $result = $this->place->getContactPoint();
        self::assertEquals($mockContactPoint, $result);
    }

    public function testGetOpeningHoursMethod(): void
    {
        $mockOpeningHour = new OpeningHours();
        $this->place->setOpeningHours([$mockOpeningHour]);

        $result = $this->place->getOpeningHours();
        self::assertEquals([$mockOpeningHour], $result);
    }
}
