<?php

namespace CultuurNet\SearchV3\Parameter;

use PHPUnit\Framework\TestCase;

class TermIdsTest extends TestCase
{
    public function testConstructor(): void
    {
        $termId = new TermIds('JCjA0i5COUmdjMwcyjNAFA');

        $key = $termId->getKey();
        $value = $termId->getValue();

        self::assertEquals($key, 'termIds');
        self::assertEquals($value, 'JCjA0i5COUmdjMwcyjNAFA');
    }
}
