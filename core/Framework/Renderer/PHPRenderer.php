<?php
namespace Core\Framework\Renderer;

class PHPRenderer implements RendererInterface
{
    const DEFAULT_NAMESPACE = "__MAIN";
    private array $paths = [];
    public function addPath(string $namespace, ?string $path = null): void
    {
        if (is_null($path)) {
            $this->paths[self::DEFAULT_NAMESPACE] = $namespace;
        } else {
            $this->paths[$namespace] = $path;
        }
    }
}