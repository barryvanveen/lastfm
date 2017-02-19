<?php

declare(strict_types=1);

namespace Tests\Feature;

use Barryvanveen\Lastfm\Lastfm;
use Tests\TestCase;

class NowListeningTest extends TestCase
{
    /** @test */
    public function it_returns_false_if_not_currently_playing_anything()
    {
        $now_playing = Lastfm::nowListening('rj', $this->lastfm_api_key);

        $this->assertEquals(false, $now_playing);
    }

    /** @test */
    public function it_returns_the_track_that_is_currently_playing()
    {
        $now_playing = Lastfm::nowListening('barryvanveen', $this->lastfm_api_key);

        $this->assertNotEmpty($now_playing);
        $this->assertArrayHasKey('artist', $now_playing);
    }
}
