<?php

namespace CultuurNet\SearchV3\Test\ValueObjects;

use CultuurNet\SearchV3\ValueObjects\Address;
use CultuurNet\SearchV3\ValueObjects\ContactPoint;
use CultuurNet\SearchV3\ValueObjects\GeoPoint;
use CultuurNet\SearchV3\ValueObjects\MediaObject;
use CultuurNet\SearchV3\ValueObjects\OpeningHours;
use CultuurNet\SearchV3\ValueObjects\Organizer;
use CultuurNet\SearchV3\ValueObjects\Place;
use CultuurNet\SearchV3\ValueObjects\Term;
use CultuurNet\SearchV3\ValueObjects\TranslatedString;

class PlaceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Place
     */
    protected $place;

    public function setUp()
    {
        $this->place = new Place();
    }

    public function testGetAddressMethod()
    {
        $mockAddress = new Address();
        $this->place->setAddress($mockAddress);

        $result = $this->place->getAddress();
        $this->assertInstanceOf(Address::class, $result);
    }

    public function testGetGeoMethod()
    {
        $mockGeo = new GeoPoint();
        $this->place->setGeo($mockGeo);

        $result = $this->place->getGeo();
        $this->assertInstanceOf(GeoPoint::class, $result);
    }

    /**
     * Test the abstract class methods
     */

    public function testGetIdMethod()
    {
        $this->place->setId('place-id');

        $result = $this->place->getId();
        $this->assertEquals('place-id', $result);
    }

    public function testGetCdbidMethod()
    {
        $this->place->setId('this/is/a/cdbid');

        $result = $this->place->getCdbid();
        $this->assertEquals('cdbid', $result);
    }

    public function testGetMainLanguageMethod()
    {
        $this->place->setMainLanguage('nl');

        $result = $this->place->getMainLanguage();
        $this->assertEquals('nl', $result);
    }

    public function testGetNameMethod()
    {

        $name = new TranslatedString(['nl' => 'name']);
        $this->place->setName($name);
        $this->assertEquals($name, $this->place->getName());
    }

    public function testGetDescriptionMethod()
    {
        $description = new TranslatedString(['nl' => 'description']);

        $this->place->setDescription($description);
        $this->assertEquals($description, $this->place->getDescription());
    }

    public function testGetCalendarTypeMethod()
    {
        $this->place->setCalendarType('multiple');

        $result = $this->place->getCalendarType();
        $this->assertEquals('multiple', $result);
    }

    public function testGetCalendarSummaryMethod()
    {
        $this->place->setCalendarSummary('cal sum');

        $result = $this->place->getCalendarSummary();
        $this->assertEquals('cal sum', $result);
    }

    public function testGetCreatorMethod()
    {
        $this->place->setCreator('that\'s me!');

        $result = $this->place->getCreator();
        $this->assertEquals('that\'s me!', $result);
    }

    public function testGetCreatedMethod()
    {
        $this->place->setCreated(new \DateTime('21-11-2017'));

        $result = $this->place->getCreated();
        $this->assertEquals(new \DateTime('21-11-2017'), $result);
    }

    public function testGetModifiedMethod()
    {
        $this->place->setModified(new \DateTime('25-11-2017'));

        $result = $this->place->getModified();
        $this->assertEquals(new \DateTime('25-11-2017'), $result);
    }

    public function testGetPublisherMethod()
    {
        $this->place->setPublisher('publisher name');

        $result = $this->place->getPublisher();
        $this->assertEquals('publisher name', $result);
    }

    public function testGetTypicalAgeRangeMethod()
    {
        $this->place->setTypicalAgeRange('9 - 11 jaar');

        $result = $this->place->getTypicalAgeRange();
        $this->assertEquals('9 - 11 jaar', $result);
    }

    public function testGetPerformerMethod()
    {
        $this->place->setPerformer(array('performer name'));

        $result = $this->place->getPerformer();
        $this->assertEquals(array('performer name'), $result);
    }

    public function testGetImageMethod()
    {
        $this->place->setImage('http://path-to-image.com');

        $result = $this->place->getImage();
        $this->assertEquals('http://path-to-image.com', $result);
    }

    public function testGetMediaObjectMethod()
    {
        $mockMediaObject = new MediaObject();
        $this->place->setMediaObject(array($mockMediaObject));

        $result = $this->place->getMediaObject();
        $this->assertEquals(array($mockMediaObject), $result);
    }

    public function testGetOrganizerMethod()
    {
        $mockOrganizer = new Organizer();
        $this->place->setOrganizer($mockOrganizer);

        $result = $this->place->getOrganizer();
        $this->assertEquals($mockOrganizer, $result);
    }

    public function testGetLabelsMethod()
    {
        $this->place->setLabels(array('label1', 'label2'));

        $result = $this->place->getLabels();
        $this->assertEquals(array('label1', 'label2'), $result);
    }

    public function testGetHiddenLabelsMethod()
    {
        $this->place->setHiddenLabels(array('hidden1', 'hidden2'));

        $result = $this->place->getHiddenLabels();
        $this->assertEquals(array('hidden1', 'hidden2'), $result);
    }

    public function testGetStartDateMethod()
    {
        $this->place->setStartDate(new \DateTime('01-01-2017'));

        $result = $this->place->getStartDate();
        $this->assertEquals(new \DateTime('01-01-2017'), $result);
    }

    public function testGetEndDateMethod()
    {
        $this->place->setEndDate(new \DateTime('31-12-2017'));

        $result = $this->place->getEndDate();
        $this->assertEquals(new \DateTime('31-12-2017'), $result);
    }

    public function testGetTermsMethod()
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
        $this->assertEquals(array($mockTerm1, $mockTerm2), $result);
    }

    public function testGetTermsByDomainMethod()
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
        $this->assertEquals(array($mockTerm1), $result);
    }

    public function testGetContactPointMethod()
    {
        $mockContactPoint = new ContactPoint();
        $this->place->setContactPoint($mockContactPoint);

        $result = $this->place->getContactPoint();
        $this->assertEquals($mockContactPoint, $result);
    }

    public function testGetOpeningHoursMethod()
    {
        $mockOpeningHour = new OpeningHours();
        $this->place->setOpeningHours($mockOpeningHour);

        $result = $this->place->getOpeningHours();
        $this->assertEquals($mockOpeningHour, $result);
    }
}
