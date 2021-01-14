<?php

namespace CultuurNet\SearchV3\Parameter;

use PHPUnit\Framework\TestCase;

class TermLabelsTest extends TestCase
{
    public function testConstructor(): void
    {
        $termLabel = new TermLabels('Jeugdhuis of jeugdcentrum');

        $key = $termLabel->getKey();
        $value = $termLabel->getValue();

        $this->assertEquals($key, 'termLabels');
        $this->assertEquals($value, 'Jeugdhuis of jeugdcentrum');
    }
}
