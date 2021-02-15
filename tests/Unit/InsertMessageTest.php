<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Message;
use DateTime;

class InsertMessageTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $message = new Message();
        $message->message = "Test Message " .(new DateTime())->getTimestamp();
        $message->save();

       // $this->assertTrue(true);
    }
}
