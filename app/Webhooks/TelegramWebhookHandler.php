<?php

namespace App\Webhooks;

use App\Services\CryptoCompare;
use Illuminate\Support\Facades\Http;
use Illuminate\Database\Eloquent\Model;
use DefStudio\Telegraph\Models\TelegraphChat;
use Illuminate\Support\Facades\Log;

class TelegramWebhookHandler extends \DefStudio\Telegraph\Handlers\WebhookHandler
{
    protected function extractMessageData(): void
    {
        $chat_name = 'default';

        $chat = $this->bot->chats()->where('chat_id', $this->request->input('message.chat.id'))->first();

        if($chat === null){
            $chat = $this->bot->chats()->create([
                'chat_id' => $this->request->input('message.chat.id'),
                'name' => $chat_name,
            ]);
            $chat->save();
        }

        $this->chat = $chat;

        assert($this->message !== null);

        $this->messageId = $this->message->id();

        $this->data = collect([
            'text' => $this->message->text(),
        ]);

        Log::debug($chat);
    }

    public function hi()
    {
        $this->chat->markdown("*Hi* happy to be here!")->send();
    }

    public function start()
    {
        $this->chat->markdown("*Hi* happy to be here!")->send();
    }

    public function compare()
    {
        $pair = new CryptoCompare(new Http());
        $price = $pair->getPrice('BTC', 'KZT');
        $this->chat->message("BTC price = $price KZT")->send();
    }
}
