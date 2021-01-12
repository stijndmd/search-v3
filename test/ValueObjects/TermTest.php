<?php

namespace CultuurNet\SearchV3\ValueObjects;

class TermTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Term
     */
    protected $term;

    public function setUp()
    {
        $this->term = new Term();
    }

    public function testGetIdMethod()
    {
        $this->term->setId('term-id');

        $result = $this->term->getId();
        $this->assertEquals('term-id', $result);
    }

    public function testGetLabelMethod()
    {
        $this->term->setLabel('term-label');

        $result = $this->term->getLabel();
        $this->assertEquals('term-label', $result);
    }

    public function testGetDomainMethod()
    {
        $this->term->setDomain('term-domain');

        $result = $this->term->getDomain();
        $this->assertEquals('term-domain', $result);
    }
}
