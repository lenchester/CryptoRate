<?php

namespace App\Webhooks;

class TelegramWebhookHandler extends \DefStudio\Telegraph\Handlers\WebhookHandler
{
    public function hi()
    {
        $this->chat->markdown("*Hi* happy to be here!")->send();
    }

    public function start(){
        $this->chat->markdown("*Hi* happy to be here!")->send();
    }
}
