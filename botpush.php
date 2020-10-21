<?php



require "vendor/autoload.php";

$access_token = 'yteuBCkFEutiGBOT+Ddx3PByNMBEkb3NOVdwnitzhOY+BdWynS6Z0ANgwkFVCiJFzOCZpKv9/V/erpxR11JOWMxcKN3X2ixhO0yM+kExpzdxLomNB9lxQQXQRd8tmZnoMKoxB3icD0abqqDUrF9PlwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '7d7a0941fefd9d46ee2a85ccd96a0a02';

$pushID = 'Uaaf1adb3a65e23d873368d97e05979d2';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







