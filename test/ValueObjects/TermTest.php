<?php

namespace CultuurNet\SearchV3\Test\ValueObjects;

use CultuurNet\SearchV3\ValueObjects\Term;

class TermTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Term
     */
    protected $term;

    public function setUp()
    {
        $this->term = new Term();

        $this->term->setId('term-id');
        $this->term->setLabel('term-label');
        $this->term->setDomain('term-domain');
    }

    public function testGetIdMethod()
    {
        $result = $this->term->getId();
        $this->assertEquals($result, 'term-id');
    }

    public function testGetLabelMethod()
    {
        $result = $this->term->getLabel();
        $this->assertEquals($result, 'term-label');
    }

    public function testGetDomainMethod()
    {
        $result = $this->term->getDomain();
        $this->assertEquals($result, 'term-domain');
    }
}
