<?php

namespace CultuurNet\SearchV3\ValueObjects;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

class Organizer
{

    /**
     * @var string
     * @Type("string")
     * @SerializedName("@id")
     */
    protected $id;

    /**
     * @var array
     * @Type("array<string,string>")
     */
    protected $name;

    /**
     * @var array
     * @Type("array<string>")
     */
    protected $email;

    /**
     * @var array
     * @Type("array<string>")
     */
    protected $hiddenLabels;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Organizer
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Get the cdbid.
     * @return string
     */
    public function getCdbid()
    {
        $id_parts = explode('/', rtrim($this->id, '/'));
        return end($id_parts);
    }

    /**
     * @return array
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Organizer
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the name for a given langcode.
     *
     * @param string $langcode
     */
    public function getNameForLanguage(string $langcode)
    {
        return $this->name[$langcode] ?? '';
    }

    /**
     * @return array
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param array $email
     * @return Organizer
     */
    public function setEmail($email)
    {
        $this->email = $email;

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
     * @return Organizer
     */
    public function setHiddenLabels($hiddenLabels)
    {
        $this->hiddenLabels = $hiddenLabels;

        return $this;
    }
}
