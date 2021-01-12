<?php

namespace CultuurNet\SearchV3\Parameter;

final class Languages extends AbstractParameter
{
    const LANG_NL = 'nl';
    const LANG_FR = 'fr';
    const LANG_DE = 'de';
    const LANG_EN = 'en';

    public function __construct(string $language)
    {
        if (in_array($language, self::getConstants(), true)) {
            $this->value = $language;
            $this->key = 'languages';
        } else {
            throw new \Exception('Invalid language parameter for '.__CLASS__.' constructor');
        }
    }

    public function allowsMultiple(): bool
    {
        return true;
    }

    protected static function getConstants(): array
    {
        $oClass = new \ReflectionClass(__CLASS__);
        return $oClass->getConstants();
    }
}
