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

        self::assertEquals('termIds', $key);
        self::assertEquals('JCjA0i5COUmdjMwcyjNAFA', $value);
    }
}
