<?php

namespace CultuurNet\SearchV3\ValueObjects;

use JMS\Serializer\DeserializationContext;
use JMS\Serializer\JsonDeserializationVisitor;
use JMS\Serializer\Annotation\HandlerCallback;

/**
 * Provides a value object for translated strings like name and description.
 */
class TranslatedString
{

    /**
     * Translations
     *
     * @var array
     */
    protected $values = [];

    /**
     * TranslatedString constructor.
     * @param array $values
     */
    public function __construct(array $values = [])
    {
        $this->values = $values;
    }

    /**
     * Get the value for a given langcode.
     *
     * @param string $langcode
     */
    public function getValueForLanguage(string $langcode)
    {
        return $this->values[$langcode] ?? '';
    }

    /**
     * Get the translations array.
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * Set the translations array.
     */
    public function setValues(array $values)
    {
        $this->values = $values;
    }

    /**
     * @HandlerCallback("json", direction = "deserialization")
     */
    public function deserializeFromJson(JsonDeserializationVisitor $visitor, $value, DeserializationContext $context)
    {
        // Some properties are not translated yet in the api. Force them as nl.
        $this->values = is_array($value) ? $value : ['nl' => $value];
    }
}
