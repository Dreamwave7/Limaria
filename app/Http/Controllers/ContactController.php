<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $this->test();
        return view("contact.index");

    }

    public function test()
    {
        dump("hello 1111");
        Config::set('mail.mailers.smtp', [
            'transport'  => 'smtp',
            'host'       => 'smtp.zoho.com',
            'port'       => 465,
            'encryption' => 'ssl',
            'username'   => 'dimalisovoy@limaria.com.ua',
            'password'   => '@AjdUIwnPO293727##%@@',
            'timeout'    => null,
            'auth_mode'  => null,
        ]);

        Config::set('mail.from', [
            'address' => 'dimalisovoy@limaria.com.ua',
            'name'    => 'Olaba Laboratory',
        ]);

        try {
            Mail::raw('Тест Zoho SMTP', function ($message) {
                $message->to('kreatormaister@gmail.com')->subject('Проверка Zoho');
            });

            Log::info('yes');
            return 'yes mail';
        } catch (\Exception $e) {
            Log::error('error: ' . $e->getMessage());
            return 'error: ' . $e->getMessage();
        }

        return 'Письмо отправлено!';
    }
}
