<?php

declare(strict_types=1);

namespace Tests;

class TestCase extends \PHPUnit\Framework\TestCase
{
    /** @var string */
    protected $lastfm_api_key;

    public function setUp()
    {
        parent::setUp();

        $this->lastfm_api_key = getenv('LASTFM_API_KEY');
    }

    /**
     * @param string $substring
     * @param string $haystack
     */
    public function assertHasSubstring(string $substring, string $haystack)
    {
        $this->assertNotFalse(stripos($haystack, $substring), 'Failed asserting that substring is part of haystack.');
    }

    /**
     * @param string $substring
     * @param string $haystack
     */
    public function assertNotHasSubstring(string $substring, string $haystack)
    {
        $this->assertFalse(stripos($haystack, $substring), 'Failed asserting that substring is not a part of haystack.');
    }
}
