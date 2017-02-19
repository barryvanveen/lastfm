<?php

declare(strict_types=1);

namespace Tests\Feature;

use Barryvanveen\Lastfm\Lastfm;
use PHPUnit\Framework\TestCase;

class nowListeningTest extends TestCase
{
    /** @test */
    public function it_returns_false_if_not_currently_playing_anything()
    {
        $now_playing = Lastfm::nowListening('rj', $_ENV['LASTFM_API_KEY']);

        $this->assertEquals(false, $now_playing);
    }

    /** @test */
    public function it_returns_the_track_that_is_currently_playing()
    {
        $now_playing = Lastfm::nowListening('barryvanveen', $_ENV['LASTFM_API_KEY']);

        $this->assertNotEmpty($now_playing);
        $this->assertArrayHasKey('artist', $now_playing);
    }
}
