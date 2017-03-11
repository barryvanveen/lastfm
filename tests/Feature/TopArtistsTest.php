<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\LastfmTestCase;

class TopArtistsTest extends LastfmTestCase
{
    /** @test */
    public function the_top_artists_are_returned()
    {
        $artists = $this->lastfm->userTopArtists('rj')->get();

        $this->assertNotEmpty($artists);
        $this->assertCount(50, $artists);
        $this->assertArrayHasKey('name', $artists[0]);
    }
}
