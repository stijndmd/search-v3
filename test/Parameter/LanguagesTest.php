<?php

namespace CultuurNet\SearchV3\Parameter\Test;

use CultuurNet\SearchV3\Parameter\Languages;

class LanguagesTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $language = new Languages(Languages::LANG_NL);

        $key = $language->getKey();
        $value = $language->getValue();

        $this->assertEquals($key, 'languages');
        $this->assertEquals($value, 'nl');
    }

    public function testConstructorWithWrongLanguage()
    {
        $this->expectException(\Exception::class);
        new Languages('not a valid language');
    }
}
