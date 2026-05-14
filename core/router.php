<?php
class Router{
    private $routes = [];
    public function get($uri,$action){
        $this->routes['GET'][$uri] = $action;
    }
    public function post($uri,$action){
        $this->routes['POST'][$uri] = $action;
    }

     public function run() {

        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];

        $base = BASE_URL;
        if (str_starts_with($uri, $base)) {
            $uri = substr($uri, strlen($base));
        }

        if (isset($this->routes[$method][$uri])) {

           [$controllerPath, $action] = explode('@', $this->routes[$method][$uri], 2);

            $controllerFile = __DIR__ . '/../app/Controller/' . $controllerPath . '.php';

            if (file_exists($controllerFile)) {
                require_once $controllerFile;
            }

            $controllerClass = 'App\\Controller\\' . str_replace('/', '\\', $controllerPath);
            $legacyControllerClass = basename($controllerPath);

            if (!class_exists($controllerClass) && class_exists($legacyControllerClass)) {
                $controllerClass = $legacyControllerClass;
            }

            if (!class_exists($controllerClass)) {
                echo "404 - Página não encontrada";
                return;
            }

            $controllerInstance = new $controllerClass();

            $controllerInstance->$action();
            
        } else {
            echo "404 - Página não encontrada";
        }
    }
}


?>