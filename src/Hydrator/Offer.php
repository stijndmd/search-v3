<?php

namespace CultuurNet\SearchV3\Hydrator;

use JMS\Serializer\Annotation\Type;

abstract class Offer
{

    /**
     * @var string
     * @Type("string")
     */
    protected $mainLanguage;

    /**
     * @var array
     * @Type("array<string,string>")
     */
    protected $name;

    /**
     * @var array
     * @Type("array<string,string>")
     */
    protected $description;

    /**
     * @var string
     * @Type("string")
     */
    protected $calendarSummary;

    /**
     * @var string
     * @Type("string")
     */
    protected $creator;

    /**
     * @var \DateTime
     * @Type("DateTime")
     */
    protected $created;

    /**
     * @var \DateTime
     * @Type("DateTime")
     */
    protected $modified;

    /**
     * @var string
     * @Type("string")
     */
    protected $publisher;

    /**
     * @var string
     * @Type("string")
     */
    protected $typicalAgeRange;

    /**
     * @var array
     * @Type("array")
     */
    protected $performer;

    /**
     * @var string
     * @Type("string")
     */
    protected $image;

    /**
     * @var MediaObject[]
     * @Type("array<Cultuurnet\SearchV3\Hydrator\MediaObject>")
     */
    protected $mediaObject;

    /**
     * @var Organizer
     * @Type("CultuurNet\SearchV3\Hydrator\Organizer")
     */
    protected $organizer;

    /**
     * @var array
     * @Type("array<string>")
     */
    protected $labels;

}