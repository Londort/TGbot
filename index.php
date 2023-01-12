<?php

$token = '5899693073:AAHozBtPDtEy5ZlbareDt1aV19e75ErQVX8';
$chatId = '-878731406';
// $chatId = '5899693073';

// https://api.telegram.org/bot5899693073:AAHozBtPDtEy5ZlbareDt1aV19e75ErQVX8/getUpdates


$getQuery = array(
     "chat_id" 	=> $chatId,
     "text"  	=> "Новое сообщение из формы",
     "parse_mode" => "html",
);
$ch = curl_init("https://api.telegram.org/bot". $token ."/sendMessage?" . http_build_query($getQuery));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);

$resultQuery = curl_exec($ch);
curl_close($ch);

echo $resultQuery;

?>
