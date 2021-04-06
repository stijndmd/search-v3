<?php

declare(strict_types=1);

namespace CultuurNet\SearchV3\ValueObjects;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class CalendarSummaryTest extends TestCase
{
    /**
     * @var CalendarSummary
     */
    private $calendarSummary;

    protected function setUp(): void
    {
        $this->calendarSummary = new CalendarSummary([
            'nl' => [
                'text' => [
                    'xs' => 'nl-text-xs',
                    'md' => 'nl-text-md',
                ],
                'html' => [
                    'sm' => 'nl-html-sm',
                ],
            ],
            'fr' => [
                'text' => [
                    'lg' => 'fr-text-lg',
                ],
                'html' => [
                    'sm' => 'fr-html-sm',
                ],
            ],
            'de' => [
                'text' => [
                    'md' => 'de-text-md',
                ],
            ],
            'en' => [
                'text' => [
                    'md' => 'en-text-md',
                ],
            ],
        ]);
    }

    /**
     * @test
     */
    public function it_returns_summaries_by_language_and_type_and_format(): void
    {
        $this->assertEquals(
            'nl-text-xs',
            $this->calendarSummary->getSummary('nl', 'text', 'xs')
        );
    }

    /**
     * @test
     */
    public function it_throws_on_unsupported_language(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $this->calendarSummary->getSummary('es', 'text', 'sm');
    }

    /**
     * @test
     */
    public function it_throws_on_unsupported_type(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $this->calendarSummary->getSummary('nl', 'markdown', 'sm');
    }

    /**
     * @test
     */
    public function it_throws_on_unsupported_format(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $this->calendarSummary->getSummary('nl', 'text', 'xl');
    }

    /**
     * @test
     */
    public function it_throws_when_language_is_not_provided(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $calendarSummary = new CalendarSummary([]);

        $calendarSummary->getSummary('de', 'html', 'md');
    }

    /**
     * @test
     */
    public function it_throws_when_type_is_not_provided(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $this->calendarSummary->getSummary('de', 'html', 'md');
    }

    /**
     * @test
     */
    public function it_throws_when_format_is_not_provided(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $this->calendarSummary->getSummary('de', 'text', 'lg');
    }
}
