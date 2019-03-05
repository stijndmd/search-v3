<?php

namespace CultuurNet\SearchV3\ValueObjects;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

class Performer
{

    /**
     * @var string
     * @Type("string")
     */
    protected $name;

    /**
     * @var string
     * @Type("string")
     */
    protected $role;

    public function __construct(
        $name = null
    ) {
        $this->name = $name;
    }


    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return string
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getRole()
    {
      return $this->role;
    }

    /**
     * @param string $role
     * @return string
     */
    public function setRole($role)
    {
      $this->role = $role;

      return $this;
    }
}
