<?php
namespace Core;

use Core\Framework\Renderer\PHPRenderer;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Psr7\Response;

class App
{


    public function run(ServerRequestInterface $request): ResponseInterface {
        $uri = $request->getUri()->getPath();
        if(!empty($uri) && $uri[-1] === '/' && $uri != '/') {
            return (new Response())
                ->withStatus(301)
                ->withHeader('Location', substr($uri, 0, -1));
        }

        $render = new PHPRenderer();
        $renderer->addPath() // ajouter des chemins
        $renderer->render('@blog/show', ['title' => $title]);

        return new Response(200,[], $uri);
    }
}