<?php
$access_token = 'iU472UNLKxCPtN3S2lKsuxU80fx6k7SOKGbip+9l+w7a8hejwZn2QFz25lZlj0jNl1CwD4cuogrjf7TAktty/SkcwpHUXZZG6zvBFT++Y8DlsgxichlmOpkQoyefLD04opcyD+iq+nkCCitGPWV2BQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
