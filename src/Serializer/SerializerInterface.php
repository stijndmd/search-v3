<?php

namespace CultuurNet\SearchV3\Serializer;

/**
 * Provides an interface for search serializer.
 */
interface SerializerInterface
{

    /**
     * Set the JMS serializer.
     */
    public function setSerializer(\JMS\Serializer\SerializerInterface $serializer);

    /**
     * Serialize the object to jsonld.
     */
    public function serialize($object);

    /**
     * Deserialize the jsonld.
     * @param string $jsonString
     *   The json formatted string of the object.
     * @param $class
     *   Type to decode to.
     */
    public function deserialize(string $jsonString);
}
