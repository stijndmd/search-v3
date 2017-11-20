<?php

namespace CultuurNet\SearchV3\Parameter\Test;

use CultuurNet\SearchV3\Parameter\Labels;

class LabelsTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $label = new Labels('this-is-a-label');

        $key = $label->getKey();
        $value = $label->getValue();

        $this->assertEquals($key, 'labels');
        $this->assertEquals($value, 'this-is-a-label');
    }
}
