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

           [$controllerPath, $action] = explode('@', $this->routes[$method][$uri]);

            $controllerFile = __DIR__ . '/../app/Controller/' . $controllerPath . '.php';
            require_once $controllerFile;

            $controller = basename($controllerPath);

            $controllerInstance = new $controller();

            $controllerInstance->$action();
            
        } else {
            echo "404 - Página não encontrada";
        }
    }
}


?>