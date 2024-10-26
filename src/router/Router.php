<?php
namespace Els\Router;

use Els\Router\Route;
use ReflectionClass;
use ReflectionAttribute;

class Router {
    private array $routes = [];
    private array $controllers = [];

    public function __construct(private string $baseUrl = '') {
        $this->loadRoutes();
    }

    public function addController(string $controllerClass): void {
        $this->controllers[] = $controllerClass;
    }

    private function loadRoutes(): void {
        foreach ($this->controllers as $controllerClass) {
            $reflectionClass = new ReflectionClass($controllerClass);
            $methods = $reflectionClass->getMethods();

            foreach ($methods as $method) {
                $attributes = $method->getAttributes(Route::class);
                foreach ($attributes as $attribute) {
                    /** @var Route $route */
                    $route = $attribute->newInstance();
                    $this->routes[] = [
                        'path' => $route->path,
                        'method' => $route->method,
                        'name' => $route->name,
                        'controller' => $controllerClass,
                        'action' => $method->getName()
                    ];
                }
            }
        }
    }

    public function dispatch(): void {
        $requestMethod = $_SERVER['REQUEST_METHOD'];
        $requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $requestUri = str_replace($this->baseUrl, '', $requestUri);

        foreach ($this->routes as $route) {
            if ($this->matchRoute($route['path'], $requestUri) && $route['method'] === $requestMethod) {
                $params = $this->extractParams($route['path'], $requestUri);
                $controller = new $route['controller']();
                call_user_func_array([$controller, $route['action']], $params);
                return;
            }
        }

        $this->handle404();
    }

    private function matchRoute(string $routePath, string $requestUri): bool {
        $routePattern = preg_replace('/\{[^}]+\}/', '([^/]+)', $routePath);
        $routePattern = "@^" . $routePattern . "$@D";
        return (bool) preg_match($routePattern, $requestUri);
    }

    private function extractParams(string $routePath, string $requestUri): array {
        $params = [];
        $routeParts = explode('/', trim($routePath, '/'));
        $requestParts = explode('/', trim($requestUri, '/'));

        foreach ($routeParts as $index => $routePart) {
            if (preg_match('/\{([^}]+)\}/', $routePart, $matches)) {
                $params[$matches[1]] = $requestParts[$index] ?? null;
            }
        }

        return $params;
    }

    private function handle404(): void {
        http_response_code(404);
        // You can customize this to use your existing error handling
        $pageData = [
            "bodyId" => 'route-error',
            "page_css_id" => 'page-error',
            "meta" => [
                "page_title" => "Erreur 404 - Els Togo",
                "page_description" => 'Els-Togo - erreur 404',
            ],
            "view" => 'views/error.view.php',
            "template" => "views/templates/template.php",
            "data" => [
                "message" => "Page not found"
            ]
        ];
        (new \Els\Controllers\viewControllers\createPage())->pageError($pageData);
    }
}
