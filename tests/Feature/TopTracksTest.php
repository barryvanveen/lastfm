<?php

declare(strict_types=1);

namespace Tests\Feature;

use Barryvanveen\Lastfm\Lastfm;
use Tests\TestCase;

class TopTracksTest extends TestCase
{
    /** @test */
    public function the_top_tracks_are_returned()
    {
        $tracks = Lastfm::userTopTracks('rj', $this->lastfm_api_key)->get();

        $this->assertNotEmpty($tracks);
        $this->assertCount(50, $tracks);
        $this->assertArrayHasKey('artist', $tracks[0]);
    }
}
