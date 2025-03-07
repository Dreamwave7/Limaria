<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
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
        Config::set('mail.mailers.smtp', [
            'transport'  => 'smtp',
            'host'       => 'smtp.zoho.com',
            'port'       => 465,
            'encryption' => 'ssl',
            'username'   => 'dimalisovoy@limaria.com.ua',
            'password'   => 'rZg3pVSGNXsA',
            'timeout'    => null,
            'auth_mode'  => null,
        ]);

        Config::set('mail.from', [
            'address' => 'dimalisovoy@limaria.com.ua',
            'name'    => 'Olaba Laboratory',
        ]);

        Mail::raw('Тест Zoho SMTP', function ($message) {
            $message->to('dima63475@gmail.com')->subject('Проверка Zoho');
        });

        return 'Письмо отправлено!';
    }
}
