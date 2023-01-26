<?php

use App\Home\HomeModule;
use Core\Framework\Renderer\PHPRenderer;
use GuzzleHttp\Psr7\ServerRequest;
use Core\App;
use function Http\Response\send;

require dirname(__DIR__).'/vendor/autoload.php';

$renderer = new PHPRenderer(
    dirname(__DIR__) . DIRECTORY_SEPARATOR . 'view'
);

$app = new App([
    HomeModule::class
],
['renderer' => $renderer]);
$response = $app->run(ServerRequest::fromGlobals());
send($response);