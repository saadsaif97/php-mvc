<?php

class Request
{
   public static function uri()
   {
      $uri = trim($_SERVER['REQUEST_URI'], '/');
      $path = ltrim($uri, 'php-mvc');

      return trim($path, '/');
   }

   public static function method()
   {
      return $_SERVER["REQUEST_METHOD"];
   }
}