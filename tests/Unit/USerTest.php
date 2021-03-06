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
//Function to verify a User object
    public function testExample2()
    {
        $user = User::inRandomOrder()->first();
        $this->assertInstanceOf('App\User',$user);
    }
    //Check if a name value is null
    public function testExample3()
    {
        $user = User::inRandomOrder()->first();
        $name = $user->name;
        $this->assertNotNull($name);
    }

    //Check if there are 500 users
    public function testExample4()
    {
        $user = User::all();
        //dd(count($user));
        $this->assertCount(500,$user);

    }

}

