<?php

namespace App\Console\Commands;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Console\Command;
use App\Http\Controllers\MessageController;


class DevTest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:DevTest';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $message = new Message();
        $message->message = 'Testing Message Insert';
        $message->save();
        print_r($message);
        exit();

        //$message = \DB::table('messages')->where('id', 1)->get();
        $request = new Request();
        $request->id = 1;
        $message = MessageController::get($request);
        dd($message);
    }
}
