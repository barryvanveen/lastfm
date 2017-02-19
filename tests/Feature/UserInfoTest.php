<?php

declare(strict_types=1);

namespace Tests\Feature;

use Barryvanveen\Lastfm\Lastfm;
use Tests\TestCase;

class UserInfoTest extends TestCase
{
    /** @test */
    public function the_user_info_is_returned()
    {
        $user = Lastfm::userInfo('rj', $this->lastfm_api_key)->get();

        $this->assertNotEmpty($user);
        $this->assertArrayHasKey('name', $user);
        $this->assertEquals('RJ', $user['name']);
        $this->assertEquals('Richard Jones ', $user['realname']);
    }
}
