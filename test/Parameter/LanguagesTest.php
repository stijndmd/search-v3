<?php

namespace CultuurNet\SearchV3\Parameter;

use PHPUnit\Framework\TestCase;

class LanguagesTest extends TestCase
{
    public function testConstructor(): void
    {
        $language = new Languages(Languages::LANG_NL);

        $key = $language->getKey();
        $value = $language->getValue();

        self::assertEquals('languages', $key);
        self::assertEquals('nl', $value);
    }

    public function testConstructorWithWrongLanguage()
    {
        $this->expectException(\Exception::class);
        new Languages('not a valid language');
    }
}
