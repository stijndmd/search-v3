<?php

namespace CultuurNet\SearchV3\ValueObjects;

use JMS\Serializer\DeserializationContext;
use JMS\Serializer\JsonDeserializationVisitor;
use PHPUnit\Framework\TestCase;

class TranslatedStringTest extends TestCase
{

    /**
     * Test the getValueForLanguage method.
     */
    public function testGetValueForLanguage(): void
    {
        $string = new TranslatedString(['nl' => 'test nl']);
        self::assertEquals('test nl', $string->getValueForLanguage('nl'));
    }

    /**
     * Test the getters and setters
     */
    public function testGettersAndSetters(): void
    {
        $string = new TranslatedString();
        $string->setValues(['nl' => 'test nl']);
        self::assertEquals(['nl' => 'test nl'], $string->getValues());
    }

    /**
     * Test the deserialize method.
     */
    public function testDeserializeMethod(): void
    {
        $visitor = $this->getMockBuilder(JsonDeserializationVisitor::class)
            ->disableOriginalConstructor()
            ->getMock();

        $context = $this->getMockBuilder(DeserializationContext::class)
            ->disableOriginalConstructor()
            ->getMock();

        $string = new TranslatedString();
        $string->deserializeFromJson($visitor, 'value', $context);
        self::assertEquals(['nl' => 'value'], $string->getValues());

        $string = new TranslatedString();
        $string->deserializeFromJson($visitor, ['test1', 'test2'], $context);
        self::assertEquals(['test1', 'test2'], $string->getValues());
    }
}
