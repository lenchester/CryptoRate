<?php

namespace App\Http\Controllers;
use DefStudio\Telegraph\Models\TelegraphChat;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class WebhookController extends Controller
{
    public function index(Request $request){
        $chat_id = $request->get('message')['chat']['id'];
        $text = $request->get('message')['text'];
        if($text == '/start'){
            $this->start($chat_id);
        }
        Log::debug($request->all());

    }

    public function start($chat_id){
        $chat = TelegraphChat::find($chat_id);
        $chat->message("Hi!");
    }
}
