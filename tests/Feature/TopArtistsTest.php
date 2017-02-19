<?php

declare(strict_types=1);

namespace Tests\Feature;

use Barryvanveen\Lastfm\Lastfm;
use Tests\TestCase;

class TopArtistsTest extends TestCase
{
    /** @test */
    public function the_top_artists_are_returned()
    {
        $artists = Lastfm::userTopArtists('rj', $this->lastfm_api_key)->get();

        $this->assertNotEmpty($artists);
        $this->assertCount(50, $artists);
        $this->assertArrayHasKey('name', $artists[0]);
    }
}
