<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\LastfmTestCase;

class RecentTracksTest extends LastfmTestCase
{
    /** @test */
    public function most_recent_tracks_are_returned()
    {
        $tracks = $this->lastfm->userRecentTracks('rj')->get();

        $this->assertNotEmpty($tracks);
        $this->assertCount(50, $tracks);
        $this->assertArrayHasKey('artist', $tracks[0]);
    }
}
