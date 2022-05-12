<?php

namespace App\Webhooks;

use App\Services\CryptoCompare;
use Illuminate\Support\Facades\Http;

class TelegramWebhookHandler extends \DefStudio\Telegraph\Handlers\WebhookHandler
{
    public function hi()
    {
        $this->chat->markdown("*Hi* happy to be here!")->send();
    }

    public function start(){
        $this->chat->markdown("*Hi* happy to be here!")->send();
    }

    public function compare(){
        $pair = new CryptoCompare(new Http());
        $price = $pair->getPrice('BTC', 'KZT');
        $this->chat->message("BTC price = $price KZT")->send();
    }
}
