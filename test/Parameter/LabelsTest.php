<?php

namespace CultuurNet\SearchV3\Parameter;

class LabelTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $label = new Label('this-is-a-label');

        $key = $label->getKey();
        $value = $label->getValue();

        $this->assertEquals($key, 'labels');
        $this->assertEquals($value, 'this-is-a-label');
    }
}
