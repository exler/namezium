<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\User;

class CreateAdminTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_add_admin_user()
    {
        $this->artisan("create:admin")
            ->expectsQuestion("Username", "admin")
            ->expectsQuestion("Password", "password")
            ->assertExitCode(0);

        $user = User::whereUsername("admin")->first();
        $this->assertNotNull($user);
        $this->assertEquals(true, $user->admin);
    }

    public function test_cannot_add_duplicate_user()
    {
        $user = User::factory()->create();

        $this->artisan("create:admin")
            ->expectsQuestion("Username", $user->username)
            ->expectsQuestion("Password", "password")
            ->assertExitCode(1);
    }
}
