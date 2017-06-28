<?php

namespace CultuurNet\SearchV3\Hydrator;

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