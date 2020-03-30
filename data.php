<?php


require __DIR__. '/config.php';
require __DIR__ . '/vendor/autoload.php';

use JeroenDesloovere\VCard\VCardParser;

if ($password == $_GET['password']) {

$parser = VCardParser::parseFromFile($vCardPath);
header('Content-Type: application/json');
print    json_encode($parser->getCards());
//echo json_encode($parser->getCardAtIndex(0)); // Prints the full name.
} else {
    http_response_code(401);
}

