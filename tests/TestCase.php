<?php

declare(strict_types = 1);

namespace Tests;

class TestCase extends \PHPUnit\Framework\TestCase
{

    /** @var  string */
    protected $lastfm_api_key;

    public function setUp()
    {
        parent::setUp();

        $this->lastfm_api_key = getenv('LASTFM_API_KEY');
    }

}