<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PalindromeFail extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/api/message/palindrome/lightspeed');
        $response->assertStatus(200)
            ->assertJson([
                'isPalindrome' => false,
            ]);
    }
}
