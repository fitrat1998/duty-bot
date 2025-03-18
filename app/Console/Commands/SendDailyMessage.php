<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\TelegramService;

class SendDailyMessage extends Command
{
    protected $signature = 'telegram:send-daily-message';
    protected $description = 'Guruhga har kuni xabar yuborish';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle(TelegramService $telegram)
    {
        $message = "📢\n"
            . "Assalomu aleykum.\n\n"
            . "🔹 *NAVBATCHILIK RO'YHATI* 🔹\n\n"
            . "👤 Abdullayev Baxtiyor\n"
            . "👤 Afrayemov Salim\n"
            . "👤 Asatullayev Javoxur\n"
            . "👤 Asfandiyorov Javohir\n"
            . "👤 Ergashev Jamshid\n"
            . "👤 Erkinov Zafar\n"
            . "👤 Fayzullavev Bobur\n"
            . "👤 Ismoilov Akbar\n"
            . "👤 Mamasalayev Ruslan\n"
            . "👤 Narziev Shaxobiddin\n"
            . "👤 Omonov Ikrom\n"
            . "👤 Otamurodov Yo'ldosh\n"
            . "👤 Salaydinov Jamshid\n"
            . "👤 Tomurodov Lochin\n"
            . "👤 Toshmatov Mirkomil\n"
            . "👤 Xoliyorov Xolbek\n\n"
            . "📝 *KECHA KIM NAVBATCHI EDI ISM FAMILYASINI YOZSIN*\n"
            . "(Keyingi odam navbatchi ekanligini bilishi uchun)";

        $telegram->sendMessage($message);
        $this->info("Xabar guruhga yuborildi!");
    }
}
