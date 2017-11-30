<?php

namespace CultuurNet\SearchV3\Parameter\Test;

use CultuurNet\SearchV3\Parameter\TermLabels;

class TermLabelsTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $termLabel = new TermLabels('Jeugdhuis of jeugdcentrum');

        $key = $termLabel->getKey();
        $value = $termLabel->getValue();

        $this->assertEquals($key, 'termLabels');
        $this->assertEquals($value, 'Jeugdhuis of jeugdcentrum');
    }
}
