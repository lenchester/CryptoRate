<?php

namespace App\Http\Controllers;
use DefStudio\Telegraph\Models\TelegraphChat;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class WebhookController extends Controller
{
    public function index(Request $request){
        Log::debug($request->all());
        $chat_id = $request->input('message.from.id');
        $text = $request->input('message.text');
        $this->start($chat_id, $text);
    }

    public function start($chat_id, $text){
        $chat = TelegraphChat::where('chat_id', $chat_id)->first();
        if($text == '/start'){
            $chat->message("Hi!")->send();
        }
        else{
            $chat->message($text)->send();
        }
    }
}
