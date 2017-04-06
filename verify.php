<?php
$access_token = 'XXXXXXXXXXXXXXXXXXXXXXX';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $oV8wffCwUlOesSdIucOllzOwy0U6Sj5AJlJ4eu1W6Ge6BSFm4GQcqtL9goIFkHfxtzFR22/Zjv2OfHwnTdcu64VjmFK0BDzFswitD2We2bKOp2RLzurYW4QpChUBbPoh0eMAv109HakqTouVT833VQdB04t89/1O/w1cDnyilFU=);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;