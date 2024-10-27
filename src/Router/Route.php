<?php
namespace Els\Router;

#[\Attribute(\Attribute::TARGET_METHOD)]
class Route {
    public function __construct(
        public readonly string $path,
        public readonly string $method = 'GET',
        public readonly string $name = ''
    ) {}
}