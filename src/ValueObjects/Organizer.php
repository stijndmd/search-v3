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

}