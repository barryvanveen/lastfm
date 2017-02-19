<?php

declare(strict_types=1);

namespace Tests\Feature;

use Barryvanveen\Lastfm\Lastfm;
use PHPUnit\Framework\TestCase;

class userInfoTest extends TestCase
{
    /** @test */
    public function the_user_info_is_returned()
    {
        $user = Lastfm::userInfo('rj', $_ENV['LASTFM_API_KEY'])->get();

        $this->assertNotEmpty($user);
        $this->assertArrayHasKey('name', $user);
        $this->assertEquals('RJ', $user['name']);
        $this->assertEquals('Richard Jones ', $user['realname']);
    }
}
