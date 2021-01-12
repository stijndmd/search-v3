<?php

namespace CultuurNet\SearchV3\ValueObjects;

use DateTime;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

abstract class Offer
{
    const CALENDAR_TYPE_MULTIPLE = 'multiple';
    const CALENDAR_TYPE_SINGLE = 'single';
    const CALENDAR_TYPE_PERIODIC = 'periodic';
    const CALENDAR_TYPE_PERMANENT = 'permanent';

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("@id")
     */
    protected $id;

    /**
     * @var string|null
     * @Type("string")
     */
    protected $mainLanguage;

    /**
     * @var TranslatedString|null
     * @Type("CultuurNet\SearchV3\ValueObjects\TranslatedString")
     */
    protected $name;

    /**
     * @var TranslatedString|null
     * @Type("CultuurNet\SearchV3\ValueObjects\TranslatedString")
     */
    protected $description;

    /**
     * @var string|null
     * @Type("string")
     */
    protected $calendarSummary;

    /**
     * @var string|null
     * @Type("string")
     */
    protected $calendarType;

    /**
     * @var string|null
     * @Type("string")
     */
    protected $creator;

    /**
     * @var DateTime|null
     * @Type("DateTime")
     */
    protected $created;

    /**
     * @var DateTime|null
     * @Type("DateTime")
     */
    protected $modified;

    /**
     * @var string|null
     * @Type("string")
     */
    protected $workflowStatus;

    /**
     * @var string|null
     * @Type("string")
     */
    protected $publisher;

    /**
     * @var string|null
     * @Type("string")
     */
    protected $typicalAgeRange;

    /**
     * @var Audience|null
     * @Type("CultuurNet\SearchV3\ValueObjects\Audience")
     */
    protected $audience;

    /**
     * @var Performer[]
     * @Type("array<CultuurNet\SearchV3\ValueObjects\Performer>")
     * @SerializedName("performer")
     */
    protected $performers = [];

    /**
     * @var string|null
     * @Type("string")
     */
    protected $image;

    /**
     * @var MediaObject[]
     * @Type("array<CultuurNet\SearchV3\ValueObjects\MediaObject>")
     * @SerializedName("mediaObject")
     */
    protected $mediaObjects = [];

    /**
     * @var Organizer|null
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
     * @var DateTime|null
     * @Type("DateTime")
     */
    protected $startDate;

    /**
     * @var DateTime|null
     * @Type("DateTime")
     */
    protected $endDate;

    /**
     * @var Term[]
     * @Type("array<CultuurNet\SearchV3\ValueObjects\Term>")
     */
    protected $terms = [];

    /**
     * @var ContactPoint|null
     * @Type("CultuurNet\SearchV3\ValueObjects\ContactPoint")
     */
    protected $contactPoint;

    /**
     * @var array
     * @Type("array<CultuurNet\SearchV3\ValueObjects\OpeningHours>")
     */
    protected $openingHours = [];

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getCdbid(): ?string
    {
        if (is_null($this->id)) {
            return null;
        }

        $id_parts = explode('/', rtrim($this->id, '/'));
        return end($id_parts);
    }

    public function setId(string $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getMainLanguage(): ?string
    {
        return $this->mainLanguage;
    }

    public function setMainLanguage(string $mainLanguage): self
    {
        $this->mainLanguage = $mainLanguage;
        return $this;
    }

    public function getName(): ?TranslatedString
    {
        return $this->name;
    }

    public function setName(TranslatedString $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getDescription(): ?TranslatedString
    {
        return $this->description;
    }

    public function setDescription(TranslatedString $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getCalendarType(): ?string
    {
        return $this->calendarType;
    }

    public function setCalendarType(string $calendarType): self
    {
        $this->calendarType = $calendarType;
        return $this;
    }

    public function getCalendarSummary(): ?string
    {
        return $this->calendarSummary;
    }

    public function setCalendarSummary(string $calendarSummary): self
    {
        $this->calendarSummary = $calendarSummary;
        return $this;
    }

    public function getCreator(): ?string
    {
        return $this->creator;
    }

    public function setCreator(string $creator): self
    {
        $this->creator = $creator;
        return $this;
    }

    public function getCreated(): ?DateTime
    {
        return $this->created;
    }

    public function setCreated(DateTime $created): self
    {
        $this->created = $created;
        return $this;
    }

    public function getModified(): ?DateTime
    {
        return $this->modified;
    }

    public function setModified(DateTime $modified): self
    {
        $this->modified = $modified;
        return $this;
    }

    public function getWorkflowStatus(): ?string
    {
        return $this->workflowStatus;
    }

    public function setWorkflowStatus(string $workflowStatus): self
    {
        $this->workflowStatus = $workflowStatus;
        return $this;
    }

    public function getPublisher(): ?string
    {
        return $this->publisher;
    }

    public function setPublisher(string $publisher): self
    {
        $this->publisher = $publisher;
        return $this;
    }

    public function getAudience(): ?Audience
    {
        return $this->audience;
    }

    public function setAudience(Audience $audience): self
    {
        $this->audience = $audience;
        return $this;
    }

    public function getTypicalAgeRange(): ?string
    {
        return $this->typicalAgeRange;
    }

    public function setTypicalAgeRange(string $typicalAgeRange): self
    {
        $this->typicalAgeRange = $typicalAgeRange;
        return $this;
    }

    /**
     * @return Performer[]
     */
    public function getPerformers(): array
    {
        return $this->performers;
    }

    /**
     * @param Performer[] $performers
     * @return self
     */
    public function setPerformers(array $performers): self
    {
        $this->performers = $performers;
        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return MediaObject[]
     */
    public function getMediaObjects(): array
    {
        return $this->mediaObjects;
    }

    /**
     * @param MediaObject[] $mediaObjects
     * @return self
     */
    public function setMediaObjects(array $mediaObjects): self
    {
        $this->mediaObjects = $mediaObjects;
        return $this;
    }

    public function getMainMediaObject(): ?MediaObject
    {
        $mediaObjects = $this->getMediaObjects();
        foreach ($mediaObjects as $mediaObject) {
            if ($mediaObject->getContentUrl() === $this->getImage()) {
                return $mediaObject;
            }
        }
        return null;
    }

    public function getOrganizer(): ?Organizer
    {
        return $this->organizer;
    }

    public function setOrganizer(Organizer $organizer): self
    {
        $this->organizer = $organizer;
        return $this;
    }

    public function getLabels(): array
    {
        return $this->labels;
    }

    public function setLabels(array $labels): self
    {
        $this->labels = $labels;
        return $this;
    }

    public function getHiddenLabels(): array
    {
        return $this->hiddenLabels;
    }

    public function setHiddenLabels(array $hiddenLabels): self
    {
        $this->hiddenLabels = $hiddenLabels;
        return $this;
    }

    public function getStartDate(): ?DateTime
    {
        return $this->startDate;
    }

    public function setStartDate(DateTime $startDate): self
    {
        $this->startDate = $startDate;
        return $this;
    }

    public function getEndDate(): ?DateTime
    {
        return $this->endDate;
    }

    public function setEndDate(DateTime $endDate): self
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return Term[]
     */
    public function getTerms(): array
    {
        return $this->terms;
    }

    /**
     * Return terms, filtered on domain.
     *
     * @param string $domain
     * @return Term[]
     */
    public function getTermsByDomain(string $domain): array
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
     * @return self
     */
    public function setTerms(array $terms): self
    {
        $this->terms = $terms;
        return $this;
    }

    public function getContactPoint(): ?ContactPoint
    {
        return $this->contactPoint;
    }

    public function setContactPoint(ContactPoint $contactPoint): self
    {
        $this->contactPoint = $contactPoint;
        return $this;
    }

    /**
     * @return OpeningHours[]
     */
    public function getOpeningHours(): array
    {
        return $this->openingHours;
    }

    /**
     * @param OpeningHours[] $openingHours
     * @return self
     */
    public function setOpeningHours(array $openingHours): self
    {
        $this->openingHours = $openingHours;
        return $this;
    }
}
