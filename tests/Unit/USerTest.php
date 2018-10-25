<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class USerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    //Function to check if user id is an integer
    public function testExample()
    {
        $user = User::inRandomOrder()->first();
        $this->assertInternalType('int', $user->id);
    }
}
