<?php

declare(strict_types=1);

namespace Tests\Unit;

use Barryvanveen\Lastfm\Constants;
use Barryvanveen\Lastfm\Exceptions\InvalidPeriodException;
use Barryvanveen\Lastfm\Lastfm;
use Tests\TestCase;

class LastfmTest extends TestCase
{
    /** @var Lastfm */
    protected $lastfm;

    /** @test */
    public function it_returns_an_array()
    {
        $albums = Lastfm::userTopAlbums('rj', $this->lastfm_api_key)->get();

        $this->assertCount(50, $albums);
    }

    /** @test */
    public function it_retrieves_albums_for_a_certain_period()
    {
        $albums_ever = Lastfm::userTopAlbums('rj', $this->lastfm_api_key)->period(Constants::PERIOD_OVERALL)->get();

        $albums_week = Lastfm::userTopAlbums('rj', $this->lastfm_api_key)->period(Constants::PERIOD_WEEK)->get();

        $this->assertNotEquals($albums_ever, $albums_week, 'Failed to assert that revieved topAlbums differ for different periods.');
    }

    /** @test */
    public function it_throws_an_exception_when_given_an_invalid_period()
    {
        $this->expectException(InvalidPeriodException::class);

        Lastfm::userTopAlbums('rj', $this->lastfm_api_key)->period('not_a_valid_period')->get();

        $this->fail('We should never reach this statement');
    }

    /** @test */
    public function it_limits_the_number_of_requested_items()
    {
        $albums = Lastfm::userTopAlbums('rj', $this->lastfm_api_key)->limit(5)->get();

        $this->assertCount(5, $albums);

        $albums = Lastfm::userTopAlbums('rj', $this->lastfm_api_key)->limit(15)->get();

        $this->assertCount(15, $albums);
    }

    /** @test */
    public function it_retrieves_a_page_of_results()
    {
        $total_albums = Lastfm::userTopAlbums('rj', $this->lastfm_api_key)->limit(10)->get();

        $first_albums = Lastfm::userTopAlbums('rj', $this->lastfm_api_key)->limit(5)->page(1)->get();

        for ($i = 0; $i < 5; ++$i) {
            $this->assertEquals($total_albums[$i]['name'], $first_albums[$i]['name']);
        }

        $second_albums = Lastfm::userTopAlbums('rj', $this->lastfm_api_key)->limit(5)->page(2)->get();

        for ($i = 0; $i < 5; ++$i) {
            $this->assertEquals($total_albums[5 + $i]['name'], $second_albums[$i]['name']);
        }
    }
}
