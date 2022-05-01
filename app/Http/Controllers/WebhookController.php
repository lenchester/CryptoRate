<?php

namespace App\Http\Controllers;
use DefStudio\Telegraph\Models\TelegraphChat;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class WebhookController extends Controller
{
    public function index(Request $request){
        Log::debug($request->all());
        $data = $request->all();
        $chat_id = $data['message']['chat']['id'];
        $text = $data['message']['text'];
        if($text == '/start'){
            $this->start($chat_id);
        }
        //Log::debug($request->all());

    }

    public function start($chat_id){
        $chat = TelegraphChat::find($chat_id);
        $chat->message("Hi!");
    }
}
