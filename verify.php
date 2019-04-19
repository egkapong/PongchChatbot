<?php
$access_token = '3yXfghiJuYpgoGP7DNSjMYkYqMdfP6n6/75/DTmX1+31aduUGjei32X5X081hBOa2YhYpMWgpltIh847HaIwgOFceqKuZ0Q6lv0R5l9+WvDo8VHT8T5HrfDhDU1Hi5tXk42D4j/MpKGXhzNrKDUNlAdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;