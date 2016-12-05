<?php

declare(strict_types=1);

namespace Barryvanveen\Lastfm;

use Barryvanveen\Lastfm\Exceptions\ResponseException;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;

class DataFetcherTest extends \PHPUnit_Framework_TestCase
{
    protected $url = 'http://example.com';

    protected $client;

    protected $dataFetcher;

    public function setUp()
    {
        $this->client = $this->prophesize(Client::class);

        $this->dataFetcher = new DataFetcher($this->client->reveal());
    }

    /** @test */
    public function it_calls_the_guzzle_client()
    {
        $response = new Response(200, [], '{"topalbums":{"album":[{"name":"The Red Album","playcount":"22","mbid":"","url":"https://www.last.fm/music/Baroness/The+Red+Album","artist":{"name":"Baroness","mbid":"eeb41a1e-4326-4d04-8c47-0f564ceecd68","url":"https://www.last.fm/music/Baroness"},"image":[{"#text":"https://lastfm-img2.akamaized.net/i/u/34s/a8ab85028bf14589c503f57bb5cb128f.png","size":"small"},{"#text":"https://lastfm-img2.akamaized.net/i/u/64s/a8ab85028bf14589c503f57bb5cb128f.png","size":"medium"},{"#text":"https://lastfm-img2.akamaized.net/i/u/174s/a8ab85028bf14589c503f57bb5cb128f.png","size":"large"},{"#text":"https://lastfm-img2.akamaized.net/i/u/300x300/a8ab85028bf14589c503f57bb5cb128f.png","size":"extralarge"}],"@attr":{"rank":"1"}},{"name":"The Collective","playcount":"16","mbid":"6d1b74ed-08cf-463b-b6df-6a8b8a7d2ab5","url":"https://www.last.fm/music/Scale+the+Summit/The+Collective","artist":{"name":"Scale the Summit","mbid":"37221dd7-41b1-49fa-ac32-08f8277f72cf","url":"https://www.last.fm/music/Scale+the+Summit"},"image":[{"#text":"https://lastfm-img2.akamaized.net/i/u/34s/983d0e99373447a397e4a0ecb657a7d8.png","size":"small"},{"#text":"https://lastfm-img2.akamaized.net/i/u/64s/983d0e99373447a397e4a0ecb657a7d8.png","size":"medium"},{"#text":"https://lastfm-img2.akamaized.net/i/u/174s/983d0e99373447a397e4a0ecb657a7d8.png","size":"large"},{"#text":"https://lastfm-img2.akamaized.net/i/u/300x300/983d0e99373447a397e4a0ecb657a7d8.png","size":"extralarge"}],"@attr":{"rank":"2"}},{"name":"Flux","playcount":"14","mbid":"","url":"https://www.last.fm/music/Sean+Ashe/Flux","artist":{"name":"Sean Ashe","mbid":"","url":"https://www.last.fm/music/Sean+Ashe"},"image":[{"#text":"https://lastfm-img2.akamaized.net/i/u/34s/bea10cd140935f33db6a96d6ada246a9.png","size":"small"},{"#text":"https://lastfm-img2.akamaized.net/i/u/64s/bea10cd140935f33db6a96d6ada246a9.png","size":"medium"},{"#text":"https://lastfm-img2.akamaized.net/i/u/174s/bea10cd140935f33db6a96d6ada246a9.png","size":"large"},{"#text":"https://lastfm-img2.akamaized.net/i/u/300x300/bea10cd140935f33db6a96d6ada246a9.png","size":"extralarge"}],"@attr":{"rank":"3"}},{"name":"Blue Record","playcount":"12","mbid":"dec9614d-1255-4fae-b2b7-09d6267d6d5d","url":"https://www.last.fm/music/Baroness/Blue+Record","artist":{"name":"Baroness","mbid":"eeb41a1e-4326-4d04-8c47-0f564ceecd68","url":"https://www.last.fm/music/Baroness"},"image":[{"#text":"https://lastfm-img2.akamaized.net/i/u/34s/80efa515bf2f4752b49f0f12dcd0e76a.png","size":"small"},{"#text":"https://lastfm-img2.akamaized.net/i/u/64s/80efa515bf2f4752b49f0f12dcd0e76a.png","size":"medium"},{"#text":"https://lastfm-img2.akamaized.net/i/u/174s/80efa515bf2f4752b49f0f12dcd0e76a.png","size":"large"},{"#text":"https://lastfm-img2.akamaized.net/i/u/300x300/80efa515bf2f4752b49f0f12dcd0e76a.png","size":"extralarge"}],"@attr":{"rank":"4"}},{"name":"Paper Mâché Dream Balloon","playcount":"12","mbid":"","url":"https://www.last.fm/music/King+Gizzard+&+The+Lizard+Wizard/Paper+Ma%CC%82che%CC%81+Dream+Balloon","artist":{"name":"King Gizzard & The Lizard Wizard","mbid":"f58384a4-2ad2-4f24-89c5-c7b74ae1cce7","url":"https://www.last.fm/music/King+Gizzard+&+The+Lizard+Wizard"},"image":[{"#text":"https://lastfm-img2.akamaized.net/i/u/34s/4dc065a3b5a639bf5abd9f7f974983c7.png","size":"small"},{"#text":"https://lastfm-img2.akamaized.net/i/u/64s/4dc065a3b5a639bf5abd9f7f974983c7.png","size":"medium"},{"#text":"https://lastfm-img2.akamaized.net/i/u/174s/4dc065a3b5a639bf5abd9f7f974983c7.png","size":"large"},{"#text":"https://lastfm-img2.akamaized.net/i/u/300x300/4dc065a3b5a639bf5abd9f7f974983c7.png","size":"extralarge"}],"@attr":{"rank":"5"}}],"@attr":{"user":"Barryvanveen","page":"1","perPage":"5","totalPages":"4","total":"18"}}}');

        $this->clientShouldBeCalledAndReturnResponse($response);

        $this->callDataFetcher();
    }

    /** @test */
    public function it_throws_an_exception_on_status_codes_different_from_200()
    {
        $response = new Response(400, [], '');

        $this->clientShouldBeCalledAndReturnResponse($response);

        $this->expectException(ResponseException::class);

        $this->callDataFetcher();
    }

    /** @test */
    public function it_throws_an_exception_if_an_error_index_is_returned()
    {
        $response = new Response(403, [], '{"error":10,"message":"Invalid API key - You must be granted a valid key by last.fm"}');

        $this->clientShouldBeCalledAndReturnResponse($response);

        $this->expectException(ResponseException::class);

        $this->callDataFetcher();
    }

    /** @test */
    public function it_returns_a_readable_message_with_an_exception()
    {
        $response = new Response(403, [], '{"error":10,"message":"Invalid API key - You must be granted a valid key by last.fm"}');

        $this->clientShouldBeCalledAndReturnResponse($response);

        $this->expectException(ResponseException::class);

        $this->expectExceptionMessage('Lastfm API error 10: Invalid API key - You must be granted a valid key by last.fm');

        $this->callDataFetcher();
    }

    /**
     * @param Response $response
     */
    protected function clientShouldBeCalledAndReturnResponse($response)
    {
        $this->client->get($this->url)->shouldBeCalled()->willReturn($response);
    }

    protected function callDataFetcher()
    {
        $this->dataFetcher->get($this->url);
    }
}
