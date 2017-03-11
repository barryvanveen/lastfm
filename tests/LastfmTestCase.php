<?php

declare(strict_types=1);

namespace Tests;

use Barryvanveen\Lastfm\Lastfm;
use GuzzleHttp\Client;

class LastfmTestCase extends TestCase
{
    /** @var Lastfm */
    protected $lastfm;

    public function setUp()
    {
        parent::setUp();

        $httpClient = new Client();

        $this->lastfm = new Lastfm($httpClient, $this->lastfm_api_key);
    }
}
