<?php

class App
{
   public static $dependencies = [];

   public static function set($key, $value)
   {
      static::$dependencies[$key] = $value;
   }

   public static function get($key)
   {
      if (!array_key_exists($key, static::$dependencies)) {
         throw new Exception("$key does not exists in the App dependencies");
      }

      return static::$dependencies[$key];
   }
}