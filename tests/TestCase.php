<?php

declare(strict_types=1);

namespace Tests;

class TestCase extends \PHPUnit\Framework\TestCase
{
    protected string $lastfm_api_key;

    public function setUp(): void
    {
        parent::setUp();

        $this->lastfm_api_key = getenv('LASTFM_API_KEY');
    }

    public function assertHasSubstring(string $substring, string $haystack): void
    {
        $this->assertNotFalse(stripos($haystack, $substring), 'Failed asserting that substring is part of haystack.');
    }

    public function assertNotHasSubstring(string $substring, string $haystack): void
    {
        $this->assertFalse(stripos($haystack, $substring), 'Failed asserting that substring is not a part of haystack.');
    }
}
