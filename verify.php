<?php
$access_token = 'yteuBCkFEutiGBOT+Ddx3PByNMBEkb3NOVdwnitzhOY+BdWynS6Z0ANgwkFVCiJFzOCZpKv9/V/erpxR11JOWMxcKN3X2ixhO0yM+kExpzdxLomNB9lxQQXQRd8tmZnoMKoxB3icD0abqqDUrF9PlwdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
