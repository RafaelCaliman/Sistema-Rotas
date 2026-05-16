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

       foreach($this->routes[$method] as $route => $action) {

         $pattern = preg_replace('/\{[a-z]+\}/', '([0-9]+)', $route);
         $pattern = '#^' . $pattern . '$#';
         
         if(preg_match($pattern, $uri, $matches)){

         [$controllerPath, $methodName] = explode('@', $action, 2);

         $controllerFile = __DIR__ . '/../app/Controller/' . $controllerPath . '.php';
         

            if (file_exists($controllerFile)) {
                require_once $controllerFile;
            }

            $controllerClass = 'App\\Controller\\' . str_replace('/', '\\', $controllerPath);

            if (!class_exists($controllerClass)) {
                echo "404 - Página não encontrada";
                return;
            }

            $controllerInstance = new $controllerClass();
         
            array_shift($matches);

            call_user_func_array([$controllerInstance, $methodName], $matches);
            return;

         } 
     }
     echo"404 - Página não encontrada";
  }
}
?>