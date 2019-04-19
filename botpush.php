<?php



require "vendor/autoload.php";

$access_token = '3yXfghiJuYpgoGP7DNSjMYkYqMdfP6n6/75/DTmX1+31aduUGjei32X5X081hBOa2YhYpMWgpltIh847HaIwgOFceqKuZ0Q6lv0R5l9+WvDo8VHT8T5HrfDhDU1Hi5tXk42D4j/MpKGXhzNrKDUNlAdB04t89/1O/w1cDnyilFU=';

$channelSecret = '63e32a7d066352fd185670d7064305f1';

$pushID = 'U4ce0a51da7112fd2121ecf868a1faf71';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();





