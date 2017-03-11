<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\LastfmTestCase;

class UserInfoTest extends LastfmTestCase
{
    /** @test */
    public function the_user_info_is_returned()
    {
        $user = $this->lastfm->userInfo('rj')->get();

        $this->assertNotEmpty($user);
        $this->assertArrayHasKey('name', $user);
        $this->assertEquals('RJ', $user['name']);
        $this->assertEquals('Richard Jones ', $user['realname']);
    }
}
