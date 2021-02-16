<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PalindromeSuccess extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/api/message/palindrome/racecar');
        $response->assertStatus(200)
            ->assertJson([
                'isPalindrome' => true,
            ]);
    }
}
