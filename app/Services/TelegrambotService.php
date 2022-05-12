<?php

namespace DefStudio\Telegraph\Handlers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Stringable;
use DefStudio\Telegraph\Handlers\WebhookHandler;

class TelegrambotService extends WebhookHandler
{
    public function hi()
    {
        $this->chat->markdown("*Hi* happy to be here!")->send();
    }

    protected function start(){

    }
}
