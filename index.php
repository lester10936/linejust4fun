<?php
$access_token ='f3Vg+J/EcLYaKSQ3vbCw8/S0h+ggTK2tFITtjqzfe/fx6v/pNbsCqHMWaW5+FkGqNwzDN++BVLK9kNPO0E7Mc4xHMeNOLZrfSYtGUWIjuLAx6UCbQjpW4OfZ5dPkkDx2AeEFHLef5InYP9pZzR6SagdB04t89/1O/w1cDnyilFU=';
//define('TOKEN', '你的Channel Access Token');

$json_string = file_get_contents('php://input');

$file = fopen("C:\\Line_log.txt", "a+");
fwrite($file, $json_string."\n"); 
$json_obj = json_decode($json_string);

$event = $json_obj->{"events"}[0];
$type  = $event->{"message"}->{"type"};
$message = $event->{"message"};
$reply_token = $event->{"replyToken"};
        
$post_data = [
  "replyToken" => $reply_token,
  "messages" => [
    [
      "type" => "text",
      "text" => $message->{"text"}
    ]
  ]
]; 
fwrite($file, json_encode($post_data)."\n");

$ch = curl_init("https://api.line.me/v2/bot/message/reply");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post_data));
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Authorization: Bearer '.$access_token
    //'Authorization: Bearer '. TOKEN
));
$result = curl_exec($ch);
fwrite($file, $result."\n");  
fclose($file);
curl_close($ch); 
?>