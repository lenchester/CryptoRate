<?php

namespace App\Webhooks;

class TelegramWebhookHandler extends \DefStudio\Telegraph\Handlers\WebhookHandler
{
    public function hi()
    {
        $this->chat->markdown("*Hi* happy to be here!")->send();
    }

    protected function start(){
        $this->chat->markdown("*Hi* happy to be here!")->send();
    }
}
