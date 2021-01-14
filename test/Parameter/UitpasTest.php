<?php

namespace CultuurNet\SearchV3\Parameter;

use PHPUnit\Framework\TestCase;

class UitpasTest extends TestCase
{
    public function testConstructor(): void
    {
        $uitpas = new Uitpas(true);

        $key = $uitpas->getKey();
        $value = $uitpas->getValue();

        $this->assertEquals($key, 'uitpas');
        $this->assertEquals($value, true);
    }
}
