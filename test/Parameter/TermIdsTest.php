<?php

namespace CultuurNet\SearchV3\Parameter\Test;

use CultuurNet\SearchV3\Parameter\TermIds;

class TermIdsTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $termId = new TermIds('JCjA0i5COUmdjMwcyjNAFA');

        $key = $termId->getKey();
        $value = $termId->getValue();

        $this->assertEquals($key, 'termIds');
        $this->assertEquals($value, 'JCjA0i5COUmdjMwcyjNAFA');
    }
}
