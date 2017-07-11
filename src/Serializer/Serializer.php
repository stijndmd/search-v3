<?php

namespace CultuurNet\SearchV3\Serializer;

use CultuurNet\SearchV3\ValueObjects\PagedCollection;
use Doctrine\Common\Annotations\AnnotationReader;
use JMS\Serializer\DeserializationContext;
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
    public function __construct() {

        $this->serializer = SerializerBuilder::create()
            ->addMetadataDir(SerializerMetadata::directory(), SerializerMetadata::namespacePrefix())
            ->setAnnotationReader(new AnnotationReader())
            ->setPropertyNamingStrategy(new SerializedNameAnnotationStrategy(new IdenticalPropertyNamingStrategy()))
            ->build();

    }

    /**
     * {@inheritdoc}
     */
    public function setSerializer(\JMS\Serializer\SerializerInterface $serializer) {
        $this->serializer = $serializer;
    }

    /**
     * {@inheritdoc}
     */
    public function serialize($object)
    {
        $serializationContext = SerializationContext::create()
            ->setSerializeNull(true);

        return $this->serializer->serialize($object, 'json', $serializationContext);
    }

    /**
     * {@inheritdoc}
     */
    public function deserialize(string $jsonString)
    {
        $deserializationContext = DeserializationContext::create()
            ->setSerializeNull(true);

        return $this->serializer->deserialize($jsonString, PagedCollection::class, 'json', $deserializationContext);
    }

}