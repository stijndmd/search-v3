<?php

namespace CultuurNet\SearchV3\Parameter\Test;

use CultuurNet\SearchV3\Parameter\ModifiedFrom;

class ModifiedFromTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $dateTime = new \DateTime('21-12-2017T10:00:00+01:00');
        $id = new ModifiedFrom($dateTime);

        $key = $id->getKey();
        $value = $id->getValue();

        $this->assertEquals('modifiedFrom', $key);
        $this->assertEquals($dateTime, $value);
    }
}
