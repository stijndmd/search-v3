<?php

namespace CultuurNet\SearchV3\Parameter;

use PHPUnit\Framework\TestCase;

class LabelTest extends TestCase
{
    public function testConstructor(): void
    {
        $label = new Label('this-is-a-label');

        $key = $label->getKey();
        $value = $label->getValue();

        $this->assertEquals($key, 'labels');
        $this->assertEquals($value, 'this-is-a-label');
    }
}
