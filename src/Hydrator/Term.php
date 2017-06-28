<?php

namespace CultuurNet\SearchV3\Hydrator;

use JMS\Serializer\Annotation\Type;

class Term
{

    /**
     * @var string
     * @Type("string")
     */
    protected $id;

    /**
     * @var string
     * @Type("string")
     */
    protected $label;

    /**
     * @var string
     * @Type("string")
     */
    protected $domain;

}