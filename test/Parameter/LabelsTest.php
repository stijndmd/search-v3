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

        self::assertEquals('labels', $key);
        self::assertEquals('this-is-a-label', $value);
    }
}
