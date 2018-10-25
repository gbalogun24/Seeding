<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegisterTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    //Test for 200 status on register page
    public function testRegisterPage()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }
}
