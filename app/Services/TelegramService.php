<?php

namespace App\Services;

use Telegram\Bot\Api;

class TelegramService
{
    protected $telegram;

    public function __construct()
    {
        $this->telegram = new Api(env('TELEGRAM_BOT_TOKEN'));
    }

    public function sendMessage($message)
    {
        $this->telegram->sendMessage([
            'chat_id' => env('TELEGRAM_CHAT_ID'),
            'text' => $message,
            'parse_mode' => 'HTML'
        ]);
    }
}
