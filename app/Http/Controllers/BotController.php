<?php

namespace App\Http\Controllers;
use DefStudio\Telegraph\Models\TelegraphChat;
use DefStudio\Telegraph\Telegraph;
use DefStudio\Telegraph\Keyboard\Button;
use DefStudio\Telegraph\Keyboard\Keyboard;
use Illuminate\Http\Request;

class BotController extends Controller
{
    function sendMessage(){
        $chat_id = 489682696;
        $chat = TelegraphChat::where('chat_id', $chat_id)->first();
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
