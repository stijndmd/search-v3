<?php

namespace CultuurNet\SearchV3\Serializer;

use CultuurNet\SearchV3\Serializer\Handler\DateTimeHandler;
use CultuurNet\SearchV3\ValueObjects\PagedCollection;
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;
use JMS\Serializer\DeserializationContext;
use JMS\Serializer\Handler\HandlerRegistry;
use JMS\Serializer\Naming\IdenticalPropertyNamingStrategy;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\SerializationContext;
use JMS\Serializer\SerializerBuilder;
use SimpleBus\JMSSerializerBridge\SerializerMetadata;

/**
 * Provides a serializer for the serializing / deserializing of search results.
 */
class Serializer implements SerializerInterface
{

    /**
     * @var SerializerInterface
     */
    private $serializer;

    /**
     * Serializer constructor.
     */
    public function __construct()
    {

        $this->serializer = SerializerBuilder::create()
            ->addMetadataDir(SerializerMetadata::directory(), SerializerMetadata::namespacePrefix())
            ->setAnnotationReader(new AnnotationReader())
            ->setPropertyNamingStrategy(new SerializedNameAnnotationStrategy(new IdenticalPropertyNamingStrategy()))
            ->configureHandlers(function (HandlerRegistry $registry) {
                $registry->registerSubscribingHandler(new DateTimeHandler());
            })
            ->build();

    }

    public function setSerializer(\JMS\Serializer\SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    public function serialize($object)
    {
        $serializationContext = SerializationContext::create()
            ->setSerializeNull(true);

        // Register doctrine annotations loader.
        AnnotationRegistry::registerLoader('class_exists');

        return $this->serializer->serialize($object, 'json', $serializationContext);
    }

    public function deserialize(string $jsonString, $class = PagedCollection::class)
    {
        $deserializationContext = DeserializationContext::create()
            ->setSerializeNull(true);

        // Register doctrine annotations loader.
        AnnotationRegistry::registerLoader('class_exists');

        return $this->serializer->deserialize($jsonString, $class, 'json', $deserializationContext);
    }
}
