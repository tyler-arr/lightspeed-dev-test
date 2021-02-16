<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MessageController extends Controller
{
    /**
     * Return a message based on a provided message Id
     * 
     * params Request $request
     * 
     * return Response
     */
    public static function get(Request $request) : Response {
        try {
            $message = \DB::table('messages')->where('id', $request->id)->get();

            if(!$message) {
                return response('Message not found', 404);
            }

            return response(json_encode($message));
        }
        catch(Exception $e) {
            return response('Error fetching message', 500);
        }
    }

    /**
     * Save a message to the database
     * 
     * params Request $request
     * 
     * return Response
     */
    public static function insert(Request $request) : Response {
        try {
            if(isset($request->message)) {
                $message = new Message();
                $message->message = $request->message;
                $message->save();

                return response(json_encode($message), 201);
            }
            else {
                return response('Invalid request', 400);
            }
        }
        catch(Exception $e) {
            return response('Error saving message', 500);
        }
    }

    /**
     * Check whether a provided message string is a palindrome
     * 
     * params Request $request
     * 
     * return Response
     */
    public static function isPalindrome(Request $request) : Response {
        try {
            if(isset($request->message)) {
                $reverse = strrev($request->message);
                if($request->message === $reverse) {
                    return response(json_encode(['isPalindrome' => true]));
                }
            }
            return response(json_encode(['isPalindrome' => false]));
        }
        catch(Exception $e) {
            return response('Error checking for palindrome', 500);
        }
    }
}
