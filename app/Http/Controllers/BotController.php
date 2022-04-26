<?php

namespace App\Http\Controllers;
use DefStudio\Telegraph\Models\TelegraphChat;
use Illuminate\Http\Request;

class BotController extends Controller
{
    function sendMessage(){
        $chat = TelegraphChat::find(1);
        $chat->message('hello')->send();
    }
}
