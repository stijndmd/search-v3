<?php

namespace CultuurNet\SearchV3\ValueObjects;

use JMS\Serializer\Annotation\Type;

class Organizer
{

    /**
     * @var string
     * @Type("string")
     */
    protected $name;

    /**
     * @var array
     * @Type("array<string>")
     */
    protected $email;

    /**
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Organizer
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * @return array
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * @param array $email
     * @return Organizer
     */
    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }

}