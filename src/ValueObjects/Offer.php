<?php

namespace CultuurNet\SearchV3\ValueObjects;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

abstract class Offer
{

    const CALENDAR_TYPE_MULTIPLE = 'multiple';
    const CALENDAR_TYPE_SINGLE = 'single';
    const CALENDAR_TYPE_PERIODIC = 'periodic';
    const CALENDAR_TYPE_PERMANENT = 'permanent';

    /**
     * @var string
     * @Type("string")
     * @SerializedName("@id")
     */
    protected $id;

    /**
     * @var string
     * @Type("string")
     */
    protected $mainLanguage;

    /**
     * @var TranslatedString
     * @Type("CultuurNet\SearchV3\ValueObjects\TranslatedString")
     */
    protected $name;

    /**
     * @var TranslatedString
     * @Type("CultuurNet\SearchV3\ValueObjects\TranslatedString")
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
    protected $calendarType;

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
     * @Type("array<CultuurNet\SearchV3\ValueObjects\MediaObject>")
     */
    protected $mediaObject = [];

    /**
     * @var Organizer
     * @Type("CultuurNet\SearchV3\ValueObjects\Organizer")
     */
    protected $organizer;

    /**
     * @var array
     * @Type("array<string>")
     */
    protected $labels = [];

    /**
     * @var array
     * @Type("array<string>")
     */
    protected $hiddenLabels = [];

    /**
     * @var \DateTime
     * @Type("DateTime")
     */
    protected $startDate;

    /**
     * @var \DateTime
     * @Type("DateTime")
     */
    protected $endDate;

    /**
     * @var Term[]
     * @Type("array<CultuurNet\SearchV3\ValueObjects\Term>")
     */
    protected $terms = [];

    /**
     * @var ContactPoint
     * @Type("CultuurNet\SearchV3\ValueObjects\ContactPoint")
     */
    protected $contactPoint;

    /**
     * @var array
     * @Type("array<CultuurNet\SearchV3\ValueObjects\OpeningHours>")
     */
    protected $openingHours = [];

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the cdbid of current offer.
     */
    public function getCdbid()
    {
        $id_parts = explode('/', rtrim($this->id, '/'));
        return end($id_parts);
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getMainLanguage()
    {
        return $this->mainLanguage;
    }

    /**
     * @param string $mainLanguage
     * @return Offer
     */
    public function setMainLanguage($mainLanguage)
    {
        $this->mainLanguage = $mainLanguage;

        return $this;
    }

    /**
     * @return TranslatedString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param TranslatedString $name
     * @return Offer
     */
    public function setName(TranslatedString $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return TranslatedString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param TranslatedString $description
     * @return Offer
     */
    public function setDescription(TranslatedString $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getCalendarType()
    {
        return $this->calendarType;
    }

    /**
     * @param string $calendarType
     * @return Offer
     */
    public function setCalendarType($calendarType)
    {
        $this->calendarType = $calendarType;
        return $this;
    }

    /**
     * @return string
     */
    public function getCalendarSummary()
    {
        return $this->calendarSummary;
    }

    /**
     * @param string $calendarSummary
     * @return Offer
     */
    public function setCalendarSummary($calendarSummary)
    {
        $this->calendarSummary = $calendarSummary;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * @param string $creator
     * @return Offer
     */
    public function setCreator($creator)
    {
        $this->creator = $creator;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param \DateTime $created
     * @return Offer
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * @param \DateTime $modified
     * @return Offer
     */
    public function setModified($modified)
    {
        $this->modified = $modified;

        return $this;
    }

    /**
     * @return string
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * @param string $publisher
     * @return Offer
     */
    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;

        return $this;
    }

    /**
     * @return string
     */
    public function getTypicalAgeRange()
    {
        return $this->typicalAgeRange;
    }

    /**
     * @param string $typicalAgeRange
     * @return Offer
     */
    public function setTypicalAgeRange($typicalAgeRange)
    {
        $this->typicalAgeRange = $typicalAgeRange;

        return $this;
    }

    /**
     * @return array
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * @param array $performer
     * @return Offer
     */
    public function setPerformer($performer)
    {
        $this->performer = $performer;

        return $this;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return string
     */
    public function getCopyright()
    {
        $mediaObjects = $this->getMediaObject();
        foreach ($mediaObjects as $mediaObject) {
            if ($mediaObject->getContentUrl() === $this->getImage()) {
                return $mediaObject->getCopyrightHolder();
            }
        }
        return '';
    }

    /**
     * @param string $image
     * @return Offer
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return MediaObject[]
     */
    public function getMediaObject()
    {
        return $this->mediaObject;
    }

    /**
     * @param MediaObject[] $mediaObject
     * @return Offer
     */
    public function setMediaObject($mediaObject)
    {
        $this->mediaObject = $mediaObject;

        return $this;
    }

    /**
     * @return Organizer
     */
    public function getOrganizer()
    {
        return $this->organizer;
    }

    /**
     * @param Organizer $organizer
     * @return Offer
     */
    public function setOrganizer($organizer)
    {
        $this->organizer = $organizer;

        return $this;
    }

    /**
     * @return array
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * @param array $labels
     * @return Offer
     */
    public function setLabels($labels)
    {
        $this->labels = $labels;

        return $this;
    }

    /**
     * @return array
     */
    public function getHiddenLabels()
    {
        return $this->hiddenLabels;
    }

    /**
     * @param array $hiddenLabels
     * @return Offer
     */
    public function setHiddenLabels($hiddenLabels)
    {
        $this->hiddenLabels = $hiddenLabels;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param \DateTime $startDate
     * @return Offer
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param \DateTime $endDate
     * @return Offer
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * @return Term[]
     */
    public function getTerms()
    {
        return $this->terms;
    }

    /**
     * Return terms, filtered on domain.
     *
     * @param string $domain
     * @return Term[]
     */
    public function getTermsByDomain(string $domain)
    {
        $filteredTerms = [];
        foreach ($this->terms as $term) {
            if ($term->getDomain() == $domain) {
                $filteredTerms[] = $term;
            }
        }
        return $filteredTerms;
    }

    /**
     * @param Term[] $terms
     * @return Offer
     */
    public function setTerms($terms)
    {
        $this->terms = $terms;

        return $this;
    }

    /**
     * @return ContactPoint
     */
    public function getContactPoint()
    {
        return $this->contactPoint;
    }

    /**
     * @param ContactPoint $contactPoint
     * @return Offer
     */
    public function setContactPoint($contactPoint)
    {
        $this->contactPoint = $contactPoint;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOpeningHours()
    {
        return $this->openingHours;
    }

    /**
     * @param mixed $openingHours
     */
    public function setOpeningHours($openingHours)
    {
        $this->openingHours = $openingHours;
    }
}
