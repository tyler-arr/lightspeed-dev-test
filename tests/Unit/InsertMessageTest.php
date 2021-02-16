<?php

namespace Tests\Unit;

use DateTime;
use App\Models\Message;
use Illuminate\Support\Str;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InsertMessageTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {

        $data = [
            'message' => "Unit Test Case: " .Str::random(25)
        ];

        $response = $this->post('/api/message', $data);
        $response->assertStatus(201);
    }
}
