<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Incoming\Answer;

class BotManController extends Controller
{
    public function handle()
    {
        $botman = app('botman');

        $botman->hears('{message}', function ($botman, $message) {

            if ($message == 'hi') {
                $this->askName($botman);
            } else if ($message == 'hello') {
                $this->askName($botman);
            } else if ($message == 'How can i buy a product?') {
                $this->askName($botman);
            } else if ($message == 'Ok thanks bro!') {
                $this->askName($botman);
            } else {
                $botman->reply("Sry i cant understand what you tell?...");
            }
        });

        $botman->listen();
    }

    /**
     * Place your BotMan logic here.
     */
    public function askName($botman)
    {
        $botman->ask('How can i help you sir?', function (Answer $answer) {

            // $name = $answer->getText();
            // $this->say('Nice to meet you ' . $name);
            $this->say('Ok sir,First you select a product and click the product,and click the add to cart button and do the payment');
            $this->say('Thank You Sir!!');
        });
    }
}
