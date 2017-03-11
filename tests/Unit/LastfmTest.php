<?php

declare(strict_types=1);

namespace Tests\Unit;

use Barryvanveen\Lastfm\Constants;
use Barryvanveen\Lastfm\Exceptions\InvalidPeriodException;
use Tests\LastfmTestCase;

class LastfmTest extends LastfmTestCase
{
    /** @test */
    public function it_returns_an_array()
    {
        $albums = $this->lastfm->userTopAlbums('rj')->get();

        $this->assertCount(50, $albums);
    }

    /** @test */
    public function it_retrieves_albums_for_a_certain_period()
    {
        $albums_ever = $this->lastfm->userTopAlbums('rj')->period(Constants::PERIOD_OVERALL)
                ->get();

        $albums_week = $this->lastfm->userTopAlbums('rj')->period(Constants::PERIOD_WEEK)->get();

        $this->assertNotEquals($albums_ever, $albums_week, 'Failed to assert that retrieved topAlbums differ for different periods.');
    }

    /** @test */
    public function it_throws_an_exception_when_given_an_invalid_period()
    {
        $this->expectException(InvalidPeriodException::class);

        $this->lastfm->userTopAlbums('rj')->period('not_a_valid_period')->get();

        $this->fail('We should never reach this statement');
    }

    /** @test */
    public function it_limits_the_number_of_requested_items()
    {
        $albums = $this->lastfm->userTopAlbums('rj')->limit(5)->get();

        $this->assertCount(5, $albums);

        $albums = $this->lastfm->userTopAlbums('rj')->limit(15)->get();

        $this->assertCount(15, $albums);
    }

    /** @test */
    public function it_retrieves_a_page_of_results()
    {
        $total_albums = $this->lastfm->userTopAlbums('rj')->limit(10)->get();

        $first_albums = $this->lastfm->userTopAlbums('rj')->limit(5)->page(1)->get();

        for ($i = 0; $i < 5; ++$i) {
            $this->assertEquals($total_albums[$i]['name'], $first_albums[$i]['name']);
        }

        $second_albums = $this->lastfm->userTopAlbums('rj')->limit(5)->page(2)->get();

        for ($i = 0; $i < 5; ++$i) {
            $this->assertEquals($total_albums[5 + $i]['name'], $second_albums[$i]['name']);
        }
    }
}
