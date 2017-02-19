<?php

declare(strict_types=1);

namespace Tests\Feature;

use Barryvanveen\Lastfm\Lastfm;
use PHPUnit\Framework\TestCase;

class topAlbumsTest extends TestCase
{
    /** @test */
    public function the_top_albums_are_returned()
    {
        $albums = Lastfm::userTopAlbums('rj', $_ENV['LASTFM_API_KEY'])->get();

        $this->assertNotEmpty($albums);
        $this->assertCount(50, $albums);
        $this->assertArrayHasKey('artist', $albums[0]);
    }
}
