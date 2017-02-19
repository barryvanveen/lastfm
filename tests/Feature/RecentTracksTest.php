<?php

declare(strict_types=1);

namespace Tests\Feature;

use Barryvanveen\Lastfm\Lastfm;
use Tests\TestCase;

class RecentTracksTest extends TestCase
{
    /** @test */
    public function most_recent_tracks_are_returned()
    {
        $tracks = Lastfm::userRecentTracks('rj', $this->lastfm_api_key)->get();

        $this->assertNotEmpty($tracks);
        $this->assertCount(50, $tracks);
        $this->assertArrayHasKey('artist', $tracks[0]);
    }
}
