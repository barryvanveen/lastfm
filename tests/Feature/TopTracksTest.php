<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\LastfmTestCase;

class TopTracksTest extends LastfmTestCase
{
    /** @test */
    public function the_top_tracks_are_returned()
    {
        $tracks = $this->lastfm->userTopTracks('rj')->get();

        $this->assertNotEmpty($tracks);
        $this->assertCount(50, $tracks);
        $this->assertArrayHasKey('artist', $tracks[0]);
    }
}
