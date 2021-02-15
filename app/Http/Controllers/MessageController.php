<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * params Request $request
     * 
     * return Response
     */
    public function get(Request $request) : Response {
        try {
            $message = \DB::select('messages')->where('id', $request->id);

            if(!$message) {
                return response().json('Message not found', 404);
            }

            return response().json($message);
        }
        catch(Exception $e) {
            return response().json('Error fetching message', 500);
        }
    }

    /**
     * params Request $request
     * 
     * return Response
     */
    public function post(Request $request) : Response {
        try {
            if(isset($request->message)) {
                $message = new Message;
                $message->message = $request->message;
                $message->save();

                return response().json($message);
            }
            else {
                return response().json('Invalid request', 400);
            }
        }
        catch(Exception $e) {
            return response().json('Error saving message', 500);
        }
    }

    /**
     * params Request $request
     * 
     * return Response
     */
    public function isPalandrome(Request $request) : Response {
        try {
            if(isset($request->message)) {
                $reverse = strrev($request->message);
                if($request->message === $reverse) {
                    return response().json(true);
                }
            }
            return response().json(false);
        }
        catch(Exception $e) {
            return response().json('Error checking for palindrome', 500);
        }
    }
}
