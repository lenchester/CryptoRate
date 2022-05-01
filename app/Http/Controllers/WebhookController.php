<?php

namespace App\Http\Controllers;
use DefStudio\Telegraph\Models\TelegraphChat;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class WebhookController extends Controller
{
    public function index(Request $request){
        Log::debug($request->all());
        $message = $request->input('message');
        $chat_id = $message['from']['id'];
        $text = $message['text'];
        if($text == '/start'){
            $this->start($chat_id);
        }
        //Log::debug($request->all());

    }

    public function start($chat_id){
        $chat = TelegraphChat::find(1);
        $chat->message("Hi!");
    }
}
