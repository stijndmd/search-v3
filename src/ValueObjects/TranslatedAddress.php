<?php

namespace CultuurNet\SearchV3\ValueObjects;

use CultuurNet\SearchV3\ValueObjects\Address;
use JMS\Serializer\Annotation\HandlerCallback;
use JMS\Serializer\DeserializationContext;
use JMS\Serializer\JsonDeserializationVisitor;

class TranslatedAddress
{

    /**
     * @var array
     */
    protected $addresses;

    /**
     * @return array
     */
    public function getAddresses(): array
    {
        return $this->addresses;
    }

    /**
     * @param array $addresses
     */
    public function setAddresses(array $addresses)
    {
        $this->addresses = $addresses;
    }

    /**
     * Get the address for a given langcode.
     *
     * @param string $langcode
     */

    /**
     * Get the address for a given langcode.
     *
     * @param string $langcode
     *   The langcode to retrieve the address for.
     * @return Address|null
     *   The retrieved address or null if it's not available.
     */
    public function getAddressForLanguage(string $langcode)
    {
        return $this->addresses[$langcode] ?? null;
    }

    /**
     * @HandlerCallback("json", direction = "deserialization")
     */
    public function deserializeFromJson(JsonDeserializationVisitor $visitor, $values, DeserializationContext $context)
    {
        foreach ($values as $key => $value) {
            if (is_array($value)) {
                $this->addresses[$key] = new Address(
                    $value['addressCountry'],
                    $value['addressLocality'],
                    $value['postalCode'],
                    $value['streetAddress']
                );
            }
        }

        // Some properties are not translated yet in the api. We save these as nl.
        if (empty($addresses) && !empty($values)) {
            $addresses['nl'] = new Address(
                $values['addressCountry'] ?? null,
                $values['addressLocality'] ?? null,
                $values['postalCode'] ?? null,
                $values['streetAddress'] ?? null
            );
        }
    }
}
