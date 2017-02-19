<?php

declare(strict_types=1);

namespace Tests\Unit;

use Barryvanveen\Lastfm\DataFetcher;
use Barryvanveen\Lastfm\Exceptions\MalformedDataException;
use Barryvanveen\Lastfm\Exceptions\ResponseException;
use PHPUnit\Framework\TestCase;

class DataFetcherTest extends TestCase
{
    /** @var DataFetcher */
    protected $dataFetcher;

    protected $api_key;

    public function setUp()
    {
        parent::setUp();

        $this->dataFetcher = new DataFetcher();

        $this->api_key = $_ENV['LASTFM_API_KEY'];
    }

    /** @test */
    public function an_array_is_returned()
    {
        $return = $this->dataFetcher->get([
            'method' => 'user.getinfo',
            'user' => 'rj',
            'format' => 'json',
            'api_key' => $this->api_key,
        ]);

        $this->assertNotEmpty($return);
        $this->assertArrayHasKey('user', $return);
        $this->assertArrayNotHasKey('name', $return);
    }

    /** @test */
    public function pluck_returns_an_index_of_the_retrieved_data()
    {
        $return = $this->dataFetcher->get([
            'method' => 'user.getinfo',
            'user' => 'rj',
            'format' => 'json',
            'api_key' => $this->api_key,
        ], 'user');

        $this->assertNotEmpty($return);
        $this->assertArrayNotHasKey('user', $return);
        $this->assertArrayHasKey('name', $return);
    }

    /** @test */
    public function pluck_works_recursively_when_given_a_dot_notation_string()
    {
        $return = $this->dataFetcher->get([
            'method' => 'user.getinfo',
            'user' => 'rj',
            'format' => 'json',
            'api_key' => $this->api_key,
        ], 'user.image.0.#text');

        $this->assertEquals('https://lastfm-img2.akamaized.net/i/u/34s/b26d6fd11de240a1c045dfb5c5d9fe65.png', $return);
    }

    /** @test */
    public function pluck_throws_an_exception_if_array_keys_doesnt_exist()
    {
        $this->expectException(MalformedDataException::class);

        $this->dataFetcher->get([
            'method' => 'user.getinfo',
            'user' => 'rj',
            'format' => 'json',
            'api_key' => $this->api_key,
        ], 'this_array_key_doesnt_exist');

        $this->fail('This statement should not be reached.');
    }

    /** @test */
    public function pluck_throws_an_exception_if_the_dot_notation_array_key_doesnt_exist()
    {
        $this->expectException(MalformedDataException::class);

        $this->dataFetcher->get([
            'method' => 'user.getinfo',
            'user' => 'rj',
            'format' => 'json',
            'api_key' => $this->api_key,
        ], 'image.this_subkey_doesnt_exist');

        $this->fail('This statement should not be reached.');
    }

    /** @test */
    public function it_throws_an_exception_when_the_api_key_is_missing()
    {
        $this->expectException(ResponseException::class);
        $this->expectExceptionCode(6);
        $this->expectExceptionMessage('Invalid parameters');

        $this->dataFetcher->get([
            'method' => 'user.getinfo',
            'user' => 'rj',
            'format' => 'json',
        ]);

        $this->fail('This statement should not be reached.');
    }

    /** @test */
    public function it_throws_an_exception_when_json_response_cannot_be_decoded()
    {
        $this->expectException(ResponseException::class);
        $this->expectExceptionMessage('Undecodable response was returned.');

        $this->dataFetcher->get([]);

        $this->fail('This statement should not be reached.');
    }
}
