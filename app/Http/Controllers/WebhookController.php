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
        $from = $message["from"];
        $chat_id = $from["id"];
        $this->start($chat_id);
        Log::debug($request->all());

    }

    public function start($chat_id){
        $chat = TelegraphChat::where('chat_id', $chat_id);
        $chat->message("Hi!");
    }
}
