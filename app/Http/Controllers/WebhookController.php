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
        Log::debug($chat_id);
        $this->start($chat_id);
    }

    public function start($chat_id){
        $chat = TelegraphChat::where('chat_id', $chat_id)->get();
        $chat->message("Hi!");
    }
}
