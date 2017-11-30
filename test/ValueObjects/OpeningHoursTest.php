<?php

namespace CultuurNet\SearchV3\Test\ValueObjects;

use CultuurNet\SearchV3\ValueObjects\OpeningHours;

class OpeningHoursTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var OpeningHours
     */
    protected $openingHours;

    public function setUp()
    {
        $this->openingHours = new OpeningHours();
    }

    public function testGetDayOfWeekMethod()
    {
        $daysOfWeek = array('tuesday', 'wednesday', 'thursday');
        $this->openingHours->setDaysOfWeek($daysOfWeek);

        $result = $this->openingHours->getDaysOfWeek();
        $this->assertEquals($daysOfWeek, $result);
    }

    public function testGetOpensMethod()
    {
        $opens = '10:00';
        $this->openingHours->setOpens($opens);

        $result = $this->openingHours->getOpens();
        $this->assertEquals($opens, $result);
    }

    public function testGetClosesMethod()
    {
        $closes = '18:00';
        $this->openingHours->setCloses($closes);

        $result = $this->openingHours->getCloses();
        $this->assertEquals($closes, $result);
    }
}
