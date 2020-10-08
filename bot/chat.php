<?php
include "Bot.php";
$bot = new Bot;
$questions = [
    "how old are you?" => "I am less than 4 Hours Old",
    "how old are you" => "I am less than 4 Hours Old",
     "what is your name?" => "My name is " . $bot->getName(),
    "what is your name" => "My name is " . $bot->getName(),
    "where are you from?" => "I am from " . $bot->getPlace(),
    "where are you from" => "I am from " . $bot->getPlace()
];

if (isset($_GET['msg'])) {
    $msg = strtolower($_GET['msg']);
    $bot->hears($msg, function (Bot $botty) {
        global $msg;
        global $questions;
        if ($msg == 'hi' || $msg == "hello") {
            $botty->reply('Hello there! you can ask me any of the following questions: <br>What is your name? <br> Where are you from? <br> How old are you?');
        } elseif ($botty->ask($msg, $questions) == "") {
            $botty->reply("You have entered the wrong command");
        } else {
            $botty->reply($botty->ask($msg, $questions));
        }
    });
}
