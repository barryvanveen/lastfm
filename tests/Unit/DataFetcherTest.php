<?php

declare(strict_types=1);

namespace Tests\Unit;

use Barryvanveen\Lastfm\DataFetcher;
use Barryvanveen\Lastfm\Exceptions\MalformedDataException;
use Barryvanveen\Lastfm\Exceptions\ResponseException;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use Tests\LastfmMockResponses;
use Tests\TestCase;

class DataFetcherTest extends TestCase
{
    /**
     * @param int    $httpCode
     * @param string $response
     *
     * @return DataFetcher
     */
    private function getDatafetcherWithMockedHandler(int $httpCode, string $response): DataFetcher
    {
        $mock = new MockHandler([
            new Response($httpCode, [], $response),
        ]);

        $handler = HandlerStack::create($mock);
        $httpClient = new Client(['handler' => $handler]);

        return new DataFetcher($httpClient);
    }

    /** @test */
    public function an_array_is_returned()
    {
        $dataFetcher = $this->getDatafetcherWithMockedHandler(200, LastfmMockResponses::userRecentTracks());

        $return = $dataFetcher->get([]);

        $this->assertNotEmpty($return);
        $this->assertArrayHasKey('recenttracks', $return);
    }

    /** @test */
    public function pluck_returns_an_index_of_the_retrieved_data()
    {
        $dataFetcher = $this->getDatafetcherWithMockedHandler(200, LastfmMockResponses::userRecentTracks());

        $return = $dataFetcher->get([], 'recenttracks');

        $this->assertNotEmpty($return);
        $this->assertArrayNotHasKey('recenttracks', $return);
        $this->assertArrayHasKey('track', $return);
    }

    /** @test */
    public function pluck_works_recursively_when_given_a_dot_notation_string()
    {
        $dataFetcher = $this->getDatafetcherWithMockedHandler(200, LastfmMockResponses::userRecentTracks());

        $return = $dataFetcher->get([], 'recenttracks.track.0.name');

        $this->assertEquals('Algol', $return);
    }

    /** @test */
    public function pluck_throws_an_exception_if_array_keys_doesnt_exist()
    {
        $dataFetcher = $this->getDatafetcherWithMockedHandler(200, LastfmMockResponses::userRecentTracks());

        $this->expectException(MalformedDataException::class);

        $dataFetcher->get([], 'this_array_key_doesnt_exist');

        $this->fail('This statement should not be reached.');
    }

    /** @test */
    public function pluck_throws_an_exception_if_the_dot_notation_array_key_doesnt_exist()
    {
        $dataFetcher = $this->getDatafetcherWithMockedHandler(200, LastfmMockResponses::userRecentTracks());

        $this->expectException(MalformedDataException::class);

        $dataFetcher->get([], 'recenttracks.this_subkey_doesnt_exist');

        $this->fail('This statement should not be reached.');
    }

    /** @test */
    public function it_throws_the_api_error_when_an_http_error_code_is_returned()
    {
        $dataFetcher = $this->getDatafetcherWithMockedHandler(400, LastfmMockResponses::apiKeyMissingErrorMessage());

        $this->expectException(ResponseException::class);
        $this->expectExceptionCode(6);
        $this->expectExceptionMessage('Invalid parameters');

        $dataFetcher->get([]);

        $this->fail('This statement should not be reached.');
    }

    /** @test */
    public function it_throws_an_unknown_error_when_no_error_message_is_returned_with_an_http_error_code()
    {
        $dataFetcher = $this->getDatafetcherWithMockedHandler(400, LastfmMockResponses::responseWithoutErrorMessage());

        $this->expectException(ResponseException::class);
        $this->expectExceptionMessage('Unknown error');

        $dataFetcher->get([]);

        $this->fail('This statement should not be reached.');
    }

    /** @test */
    public function it_throws_an_exception_when_json_response_cannot_be_decoded()
    {
        $dataFetcher = $this->getDatafetcherWithMockedHandler(200, LastfmMockResponses::undecodableJson());

        $this->expectException(ResponseException::class);
        $this->expectExceptionMessage('Undecodable response was returned.');

        $dataFetcher->get([]);

        $this->fail('This statement should not be reached.');
    }
}
