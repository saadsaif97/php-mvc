<?php

class Router
{
   public $routes = [
      'GET' => [],
      'POST' => [],
      'DELETE' => []
   ];

   public function get($uri, $controller)
   {
      $this->routes['GET'][$uri] = $controller;
   }

   public function post($uri, $controller)
   {
      $this->routes['POST'][$uri] = $controller;
   }

   public function delete($uri, $controller)
   {
      $this->routes['DELETE'][$uri] = $controller;
   }

   public static function load($file)
   {
      $router = new static;

      require $file;
      
      return $router;
   }


   public function direct($uri, $request_type)
   {
      $parserd_uri = parse_url($uri);
      
      $path = $parserd_uri['path'];
      $id = explode('=', $parserd_uri['query'])[1];

      if(array_key_exists($path, $this->routes[$request_type])){
         // controller@method
         return $this->callAction($id, ...explode('@', $this->routes[$request_type][$path]));

      }
  
      throw new Exception("Route does not exists");
   }


   protected function callAction($id, $controller, $action)
   {
      require_once 'controllers/'.$controller.'.php';

      if (!method_exists($controller, $action)) {
         throw new Exception("Method $action does not exits on $controller Controller");
      }

      if ($id) {
         return (new $controller)->destroy($id);
      }

      return (new $controller)->$action();
   }

}
