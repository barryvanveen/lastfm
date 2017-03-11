<?php

declare(strict_types=1);

namespace Tests\Feature;

use Barryvanveen\Lastfm\Lastfm;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use Tests\LastfmMockResponses;
use Tests\TestCase;

class NowListeningTest extends TestCase
{
    /** @test */
    public function it_returns_false_if_not_currently_playing_anything()
    {
        $mock = new MockHandler([
            new Response(200, [], LastfmMockResponses::notNowListening()),
        ]);

        $handler = HandlerStack::create($mock);
        $client = new Client(['handler' => $handler]);

        $lastfm = new Lastfm($client, 'fakeApiKey');
        $now_playing = $lastfm->nowListening('anyUserName');

        $this->assertEquals(false, $now_playing);
    }

    /** @test */
    public function it_returns_the_track_that_is_currently_playing()
    {
        $mock = new MockHandler([
            new Response(200, [], LastfmMockResponses::nowListening()),
        ]);

        $handler = HandlerStack::create($mock);
        $client = new Client(['handler' => $handler]);

        $lastfm = new Lastfm($client, 'fakeApiKey');
        $now_playing = $lastfm->nowListening('anyUserName');

        $this->assertNotEmpty($now_playing);
        $this->assertArrayHasKey('artist', $now_playing);
    }
}
