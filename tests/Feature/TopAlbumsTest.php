<?php

declare(strict_types=1);

namespace Tests\Feature;

use Barryvanveen\Lastfm\Lastfm;
use Tests\TestCase;

class TopAlbumsTest extends TestCase
{
    /** @test */
    public function the_top_albums_are_returned()
    {
        $albums = Lastfm::userTopAlbums('rj', $this->lastfm_api_key)->get();

        $this->assertNotEmpty($albums);
        $this->assertCount(50, $albums);
        $this->assertArrayHasKey('artist', $albums[0]);
    }
}
