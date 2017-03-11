<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\LastfmTestCase;

class TopAlbumsTest extends LastfmTestCase
{
    /** @test */
    public function the_top_albums_are_returned()
    {
        $albums = $this->lastfm->userTopAlbums('rj')->get();

        $this->assertNotEmpty($albums);
        $this->assertCount(50, $albums);
        $this->assertArrayHasKey('artist', $albums[0]);
    }
}
