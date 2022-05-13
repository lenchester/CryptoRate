<?php

namespace App\Http\Controllers;
use DefStudio\Telegraph\Models\TelegraphBot;
use DefStudio\Telegraph\Models\TelegraphChat;
use DefStudio\Telegraph\Telegraph;
use DefStudio\Telegraph\Keyboard\Button;
use DefStudio\Telegraph\Keyboard\Keyboard;
use Illuminate\Http\Request;

class BotController extends Controller
{
    function sendMessage(){
        $telegraph_bot = TelegraphBot::find(1);
        //dd($telegraph_bot);
        $chat_id = 5204505264;
        $chat_name = 'default';
        $chat = TelegraphChat::where('chat_id', $chat_id)->first();
        if($chat === null){
            $chat = $telegraph_bot->chats()->create([
                'chat_id' => $chat_id,
                'name' => $chat_name,
            ]);
            $chat->save();
            dd($chat);
        }

//        if(!TelegraphChat::where('chat_id', $chat_id)){
//            $chat = new TelegraphChat();
//            $chat->name = 'test';
//        }

        //$chat = TelegraphChat::find(1);
        //dd($chat);
        //$chat->message('Hi')->send();
    }

    function sendKeyboard(){
        $chat = TelegraphChat::find(1);
        $chat->message('hello world')
            ->keyboard(Keyboard::make()->buttons([
                Button::make('Delete'),
                Button::make('open')->url('https://test.it'),
            ]))->send();
    }
}
