<?php

use App\Bots\SlackBot;

$slackbot = App::make('App\Bots\SlackBot');

$slackbot->hearsMention('(hello|hi)', function(SlackBot $bot) {
    $bot->reply('You rang?');
});

$slackbot->hearsMention('(CAH|cards against humanity)', function(SlackBot $bot) {
    $bot->reply('Let\'s play!');
});

//dd($slackbot);
//$slackbot->connection->hears('hello', function (BotMan $bot) {
//    $bot->reply('Hello yourself.');
//});