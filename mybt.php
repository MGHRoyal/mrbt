<?php
$url = "https://api.telegram.org/bot788164006:AAESFrkBBru23_t43qaVoGJgm3z6Uf5_41I/getUpdates";
$result = file_get_contents($url);
var_dump($result);
    file_put_contents("myBotResult.txt",$result);
?>
