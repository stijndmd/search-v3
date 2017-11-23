<?php

namespace CultuurNet\SearchV3\Test\ValueObjects;

use CultuurNet\SearchV3\ValueObjects\Organizer;

class OrganizerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Organizer
     */
    protected $organizer;

    public function setUp()
    {
        $this->organizer = new Organizer();
    }

    public function testGetNameMethod()
    {
        $this->organizer->setName('organizer name');

        $result = $this->organizer->getName();
        $this->assertEquals('organizer name', $result);
    }

    public function testGetEmailMethod()
    {
        $this->organizer->setEmail(array('test@organizer.com'));

        $result = $this->organizer->getEmail();
        $this->assertEquals(array('test@organizer.com'), $result);
    }

    public function testGetHiddenLabelsMethod()
    {
        $this->organizer->setHiddenLabels(array('hidden1', 'hidden2'));

        $result = $this->organizer->getHiddenLabels();
        $this->assertEquals(array('hidden1', 'hidden2'), $result);
    }
}
