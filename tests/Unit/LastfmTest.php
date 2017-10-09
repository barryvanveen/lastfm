<?php

declare(strict_types=1);

namespace Tests\Unit;

use Barryvanveen\Lastfm\Constants;
use Barryvanveen\Lastfm\Exceptions\InvalidPeriodException;
use Barryvanveen\Lastfm\Lastfm;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;
use Tests\LastfmMockResponses;
use Tests\TestCase;

class LastfmTest extends TestCase
{
    /**
     * @param int    $code
     * @param string $response
     * @param array  $callHistory
     *
     * @return Client
     */
    private function getPreparedHttpClient(int $code, string $response, array &$callHistory): Client
    {
        $history = Middleware::history($callHistory);

        $mock = new MockHandler([
            new Response($code, [], $response),
        ]);

        $stack = HandlerStack::create($mock);
        $stack->push($history);

        return new Client(['handler' => $stack]);
    }

    /**
     * @param array $callHistory
     *
     * @return string
     */
    private function getQueryFromCallHistory($callHistory): string
    {
        return $callHistory[0]['request']->getUri()->getQuery();
    }

    /** @test */
    public function constructor_sets_base_query_parameters()
    {
        $callHistory = [];

        $client = $this->getPreparedHttpClient(200, LastfmMockResponses::userInfo(), $callHistory);

        $lastfm = new Lastfm($client, $this->lastfm_api_key);
        $lastfm->userInfo('myUserName')->get();

        $this->assertHasSubstring('format=json', $this->getQueryFromCallHistory($callHistory));
        $this->assertHasSubstring('api_key='.$this->lastfm_api_key, $this->getQueryFromCallHistory($callHistory));
    }

    /** @test */
    public function userinfo_sets_required_query_parameters()
    {
        $callHistory = [];

        $client = $this->getPreparedHttpClient(200, LastfmMockResponses::userInfo(), $callHistory);

        $lastfm = new Lastfm($client, $this->lastfm_api_key);
        $lastfm->userInfo('myUserName')->get();

        $this->assertHasSubstring('method=user.getInfo', $this->getQueryFromCallHistory($callHistory));
        $this->assertHasSubstring('user=myUserName', $this->getQueryFromCallHistory($callHistory));
    }

    /** @test */
    public function userTopAlbums_sets_required_query_parameters()
    {
        $callHistory = [];

        $client = $this->getPreparedHttpClient(200, LastfmMockResponses::userTopAlbums(), $callHistory);

        $lastfm = new Lastfm($client, $this->lastfm_api_key);
        $lastfm->userTopAlbums('myUserName')->get();

        $this->assertHasSubstring('method=user.getTopAlbums', $this->getQueryFromCallHistory($callHistory));
        $this->assertHasSubstring('user=myUserName', $this->getQueryFromCallHistory($callHistory));
    }

    /** @test */
    public function userTopArtists_sets_required_query_parameters()
    {
        $callHistory = [];

        $client = $this->getPreparedHttpClient(200, LastfmMockResponses::userTopArtists(), $callHistory);

        $lastfm = new Lastfm($client, $this->lastfm_api_key);
        $lastfm->userTopArtists('myUserName')->get();

        $this->assertHasSubstring('method=user.getTopArtists', $this->getQueryFromCallHistory($callHistory));
        $this->assertHasSubstring('user=myUserName', $this->getQueryFromCallHistory($callHistory));
    }

    /** @test */
    public function userWeeklyTopAlbums_sets_required_query_parameters()
    {
        $callHistory = [];

        $client = $this->getPreparedHttpClient(200, LastfmMockResponses::userWeeklyTopAlbums(), $callHistory);

        $startDate = new \DateTime('2017-01-01');

        $lastfm = new Lastfm($client, $this->lastfm_api_key);
        $lastfm->userWeeklyTopAlbums('myUserName', $startDate)->get();

        $this->assertHasSubstring('method=user.getWeeklyAlbumChart', $this->getQueryFromCallHistory($callHistory));
        $this->assertHasSubstring('from=1483228800', $this->getQueryFromCallHistory($callHistory));
        $this->assertHasSubstring('to=1483833600', $this->getQueryFromCallHistory($callHistory));
        $this->assertHasSubstring('user=myUserName', $this->getQueryFromCallHistory($callHistory));
    }

    /** @test */
    public function userWeeklyTopArtists_sets_required_query_parameters()
    {
        $callHistory = [];

        $client = $this->getPreparedHttpClient(200, LastfmMockResponses::userWeeklyTopArtists(), $callHistory);

        $startDate = new \DateTime('2017-01-01');

        $lastfm = new Lastfm($client, $this->lastfm_api_key);
        $lastfm->userWeeklyTopArtists('myUserName', $startDate)->get();

        $this->assertHasSubstring('method=user.getWeeklyArtistChart', $this->getQueryFromCallHistory($callHistory));
        $this->assertHasSubstring('from=1483228800', $this->getQueryFromCallHistory($callHistory));
        $this->assertHasSubstring('to=1483833600', $this->getQueryFromCallHistory($callHistory));
        $this->assertHasSubstring('user=myUserName', $this->getQueryFromCallHistory($callHistory));
    }

    /** @test */
    public function userWeeklyTopTracks_sets_required_query_parameters()
    {
        $callHistory = [];

        $client = $this->getPreparedHttpClient(200, LastfmMockResponses::userWeeklyTopTracks(), $callHistory);

        $startDate = new \DateTime('2017-01-01');

        $lastfm = new Lastfm($client, $this->lastfm_api_key);
        $lastfm->userWeeklyTopTracks('myUserName', $startDate)->get();

        $this->assertHasSubstring('method=user.getWeeklyTrackChart', $this->getQueryFromCallHistory($callHistory));
        $this->assertHasSubstring('from=1483228800', $this->getQueryFromCallHistory($callHistory));
        $this->assertHasSubstring('to=1483833600', $this->getQueryFromCallHistory($callHistory));
        $this->assertHasSubstring('user=myUserName', $this->getQueryFromCallHistory($callHistory));
    }

    /** @test */
    public function userWeeklyChartList_sets_required_query_parameters()
    {
        $callHistory = [];

        $client = $this->getPreparedHttpClient(200, LastfmMockResponses::userWeeklyChartList(), $callHistory);

        $lastfm = new Lastfm($client, $this->lastfm_api_key);
        $lastfm->userWeeklyChartList('myUserName')->get();

        $this->assertHasSubstring('method=user.getWeeklyChartList', $this->getQueryFromCallHistory($callHistory));
        $this->assertHasSubstring('user=myUserName', $this->getQueryFromCallHistory($callHistory));
    }

    /** @test */
    public function userTopTracks_sets_required_query_parameters()
    {
        $callHistory = [];

        $client = $this->getPreparedHttpClient(200, LastfmMockResponses::userTopTracks(), $callHistory);

        $lastfm = new Lastfm($client, $this->lastfm_api_key);
        $lastfm->userTopTracks('myUserName')->get();

        $this->assertHasSubstring('method=user.getTopTracks', $this->getQueryFromCallHistory($callHistory));
        $this->assertHasSubstring('user=myUserName', $this->getQueryFromCallHistory($callHistory));
    }

    /** @test */
    public function userRecentTracks_sets_required_query_parameters()
    {
        $callHistory = [];

        $client = $this->getPreparedHttpClient(200, LastfmMockResponses::userRecentTracks(), $callHistory);

        $lastfm = new Lastfm($client, $this->lastfm_api_key);
        $lastfm->userRecentTracks('myUserName')->get();

        $this->assertHasSubstring('method=user.getRecentTracks', $this->getQueryFromCallHistory($callHistory));
        $this->assertHasSubstring('user=myUserName', $this->getQueryFromCallHistory($callHistory));
    }

    /** @test */
    public function it_throws_an_exception_when_requesting_an_invalid_period()
    {
        $client = new Client();

        $lastfm = new Lastfm($client, $this->lastfm_api_key);

        $this->expectException(InvalidPeriodException::class);

        $lastfm->period('not-existing-period');

        $this->fail('This statement should not be reached.');
    }

    /** @test */
    public function it_adds_the_period_query_to_the_request()
    {
        $callHistory = [];

        $client = $this->getPreparedHttpClient(200, LastfmMockResponses::empty(), $callHistory);

        $lastfm = new Lastfm($client, $this->lastfm_api_key);
        $lastfm->period(Constants::PERIOD_YEAR)->get();

        $this->assertHasSubstring('period=12month', $this->getQueryFromCallHistory($callHistory));
    }

    /** @test */
    public function it_overrides_an_existing_period_query()
    {
        $callHistory = [];

        $client = $this->getPreparedHttpClient(200, LastfmMockResponses::empty(), $callHistory);

        $lastfm = new Lastfm($client, $this->lastfm_api_key);
        $lastfm->period(Constants::PERIOD_YEAR)->period(Constants::PERIOD_WEEK)->get();

        $this->assertHasSubstring('period=7day', $this->getQueryFromCallHistory($callHistory));
        $this->assertNotHasSubstring('period=12month', $this->getQueryFromCallHistory($callHistory));
    }

    /** @test */
    public function it_adds_the_limit_query_to_the_request()
    {
        $callHistory = [];

        $client = $this->getPreparedHttpClient(200, LastfmMockResponses::empty(), $callHistory);

        $lastfm = new Lastfm($client, $this->lastfm_api_key);
        $lastfm->limit(5)->get();

        $this->assertHasSubstring('limit=5', $this->getQueryFromCallHistory($callHistory));
    }

    /** @test */
    public function it_overrides_an_existing_limit_query()
    {
        $callHistory = [];

        $client = $this->getPreparedHttpClient(200, LastfmMockResponses::empty(), $callHistory);

        $lastfm = new Lastfm($client, $this->lastfm_api_key);
        $lastfm->limit(5)->limit(321)->get();

        $this->assertHasSubstring('limit=321', $this->getQueryFromCallHistory($callHistory));
        $this->assertNotHasSubstring('limit=5', $this->getQueryFromCallHistory($callHistory));
    }

    /** @test */
    public function it_adds_the_page_query_to_the_request()
    {
        $callHistory = [];

        $client = $this->getPreparedHttpClient(200, LastfmMockResponses::empty(), $callHistory);

        $lastfm = new Lastfm($client, $this->lastfm_api_key);
        $lastfm->page(1)->get();

        $this->assertHasSubstring('page=1', $this->getQueryFromCallHistory($callHistory));
    }

    /** @test */
    public function it_overrides_an_existing_page_query()
    {
        $callHistory = [];

        $client = $this->getPreparedHttpClient(200, LastfmMockResponses::empty(), $callHistory);

        $lastfm = new Lastfm($client, $this->lastfm_api_key);
        $lastfm->page(1)->page(2)->get();

        $this->assertHasSubstring('page=2', $this->getQueryFromCallHistory($callHistory));
        $this->assertNotHasSubstring('page=1', $this->getQueryFromCallHistory($callHistory));
    }

    /** @test */
    public function it_returns_false_if_not_currently_playing_anything()
    {
        $callHistory = [];

        $client = $this->getPreparedHttpClient(200, LastfmMockResponses::notNowListening(), $callHistory);

        $lastfm = new Lastfm($client, 'fakeApiKey');
        $now_playing = $lastfm->nowListening('anyUserName');

        $this->assertEquals(false, $now_playing);
    }

    /** @test */
    public function it_returns_the_track_that_is_currently_playing()
    {
        $callHistory = [];

        $client = $this->getPreparedHttpClient(200, LastfmMockResponses::nowListening(), $callHistory);

        $lastfm = new Lastfm($client, 'fakeApiKey');
        $now_playing = $lastfm->nowListening('anyUserName');

        $this->assertNotEmpty($now_playing);
        $this->assertArrayHasKey('artist', $now_playing);
    }
}
