<?php

use GuzzleHttp\Psr7\ServerRequest;
use Core\App;
use function Http\Response\send;

require dirname(__DIR__).'/vendor/autoload.php';

$app = new App();
$response = $app->run(ServerRequest::fromGlobals());
send($response);