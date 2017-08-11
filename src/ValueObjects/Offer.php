<?php

namespace CultuurNet\SearchV3\ValueObjects;

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
     * @Type("array<CultuurNet\SearchV3\ValueObjects\MediaObject>")
     */
    protected $mediaObject;

    /**
     * @var Organizer
     * @Type("CultuurNet\SearchV3\ValueObjects\Organizer")
     */
    protected $organizer;

    /**
     * @var array
     * @Type("array<string>")
     */
    protected $labels;

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
     * @return string
     */
    public function getMainLanguage() {
        return $this->mainLanguage;
    }

    /**
     * @param string $mainLanguage
     * @return Offer
     */
    public function setMainLanguage($mainLanguage) {
        $this->mainLanguage = $mainLanguage;

        return $this;
    }

    /**
     * @return array
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param array $name
     * @return Offer
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * @return array
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * @param array $description
     * @return Offer
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getCalendarSummary() {
        return $this->calendarSummary;
    }

    /**
     * @param string $calendarSummary
     * @return Offer
     */
    public function setCalendarSummary($calendarSummary) {
        $this->calendarSummary = $calendarSummary;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreator() {
        return $this->creator;
    }

    /**
     * @param string $creator
     * @return Offer
     */
    public function setCreator($creator) {
        $this->creator = $creator;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreated() {
        return $this->created;
    }

    /**
     * @param \DateTime $created
     * @return Offer
     */
    public function setCreated($created) {
        $this->created = $created;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getModified() {
        return $this->modified;
    }

    /**
     * @param \DateTime $modified
     * @return Offer
     */
    public function setModified($modified) {
        $this->modified = $modified;

        return $this;
    }

    /**
     * @return string
     */
    public function getPublisher() {
        return $this->publisher;
    }

    /**
     * @param string $publisher
     * @return Offer
     */
    public function setPublisher($publisher) {
        $this->publisher = $publisher;

        return $this;
    }

    /**
     * @return string
     */
    public function getTypicalAgeRange() {
        return $this->typicalAgeRange;
    }

    /**
     * @param string $typicalAgeRange
     * @return Offer
     */
    public function setTypicalAgeRange($typicalAgeRange) {
        $this->typicalAgeRange = $typicalAgeRange;

        return $this;
    }

    /**
     * @return array
     */
    public function getPerformer() {
        return $this->performer;
    }

    /**
     * @param array $performer
     * @return Offer
     */
    public function setPerformer($performer) {
        $this->performer = $performer;

        return $this;
    }

    /**
     * @return string
     */
    public function getImage() {
        return $this->image;
    }

    /**
     * @param string $image
     * @return Offer
     */
    public function setImage($image) {
        $this->image = $image;

        return $this;
    }

    /**
     * @return MediaObject[]
     */
    public function getMediaObject() {
        return $this->mediaObject;
    }

    /**
     * @param MediaObject[] $mediaObject
     * @return Offer
     */
    public function setMediaObject($mediaObject) {
        $this->mediaObject = $mediaObject;

        return $this;
    }

    /**
     * @return Organizer
     */
    public function getOrganizer() {
        return $this->organizer;
    }

    /**
     * @param Organizer $organizer
     * @return Offer
     */
    public function setOrganizer($organizer) {
        $this->organizer = $organizer;

        return $this;
    }

    /**
     * @return array
     */
    public function getLabels() {
        return $this->labels;
    }

    /**
     * @param array $labels
     * @return Offer
     */
    public function setLabels($labels) {
        $this->labels = $labels;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate() {
        return $this->startDate;
    }

    /**
     * @param \DateTime $startDate
     * @return Offer
     */
    public function setStartDate($startDate) {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate() {
        return $this->endDate;
    }

    /**
     * @param \DateTime $endDate
     * @return Offer
     */
    public function setEndDate($endDate) {
        $this->endDate = $endDate;

        return $this;
    }

}