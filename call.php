<?php


require __DIR__. '/config.php';
require __DIR__ . '/vendor/autoload.php';


if ($password == $_GET['password']) {
    $num='0'.$_GET['num'];
    $num=str_replace('+49','0',$num);
    $num=str_replace('+','00',$num);
    $num=preg_replace('/[^0-9]/', '',$num);
    $int=$_GET['internal'];
    $filename=$AsteriskOutgoingDir."/mein.call";
    $content = "Callerid: ". $num . "\n";
    $content .= "Channel: SIP/".$int."\n";
    $content .= "MaxRetries: 2\n";
    $content .= "RetryTime: 60\n";
    $content .= "WaitTime: 30\n";
    $content .= "Context: svelke\n";
    $content .= "Extension: ".$num."\n";
    file_put_contents ( $filename , $content);
    header('Location: '.$baseURL.'?password='.$password);
    exit();
} else {
    http_response_code(401);
}