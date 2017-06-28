<?php

namespace CultuurNet\SearchV3\Hydrator;

use JMS\Serializer\Annotation\Type;

class MediaObject
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
    protected $contentUrl;

    /**
     * @var string
     * @Type("string")
     */
    protected $thumbnailUrl;

    /**
     * @var string
     * @Type("string")
     */
    protected $description;

    /**
     * @var string
     * @Type("string")
     */
    protected $copyrightHolder;

}