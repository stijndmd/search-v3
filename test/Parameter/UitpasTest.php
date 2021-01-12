<?php

namespace CultuurNet\SearchV3\Parameter;

class UitpasTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $uitpas = new Uitpas(true);

        $key = $uitpas->getKey();
        $value = $uitpas->getValue();

        $this->assertEquals($key, 'uitpas');
        $this->assertEquals($value, true);
    }
}
