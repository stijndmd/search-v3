<?php

namespace CultuurNet\SearchV3\ValueObjects;

use JMS\Serializer\DeserializationContext;
use JMS\Serializer\JsonDeserializationVisitor;
use JMS\Serializer\TypeParser;
use JMS\Serializer\Annotation\HandlerCallback;

class Collection
{

    protected $contextMapping = [
        '/contexts/event' => Event::class,
        '/contexts/place' => Place::class
    ];

    protected $items = [];

    /**
     * @HandlerCallback("json", direction = "deserialization")
     */
    public function deserializeFromJson(JsonDeserializationVisitor $visitor, $values, DeserializationContext $context)
    {
        $deserializationContext = DeserializationContext::create()
            ->setSerializeNull(true);

        $memberVisitor = clone $visitor;

        $deserializationContext->initialize(
            'json',
            $memberVisitor,
            $context->getNavigator(),
            $context->getMetadataFactory()
        );

        $typeParser = new TypeParser();
        $metadata = [];
        foreach ($values as $member) {
            $class = $this->contextMapping[$member['@context']];
            $metadata[$class] = $metadata[$class] ?? $deserializationContext->getMetadataFactory()->getMetadataForClass($class);

            $object = new $class();
            $memberVisitor->startVisitingObject($metadata[$class], $object, $typeParser->parse($class), $deserializationContext);

            $properties = $metadata[$class]->propertyMetadata;
            foreach ($properties as $property) {
                $memberVisitor->visitProperty($property, $member, $deserializationContext);
            }

            $this->items[] = $object;
        }
    }

}