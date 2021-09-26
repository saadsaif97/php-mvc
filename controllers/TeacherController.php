<?php

class TeacherController
{
   public function index()
   {
      $view = 'views/teacher.view.php';

      try {
         $teachers = App::get('db')->selectAll('teachers');
      } catch (PDOException $e) {
         die('Something went wrong :(');
      }

      require 'views/layout/layout.php';
   }

   public function store()
   {
      App::get('db')->insert('teachers', $_REQUEST);

      return header('Location: /php-mvc/teachers');
   }

   public function destroy($id)
   {
      App::get('db')->delete('teachers', [$id]);
      return redirect('/php-mvc/teachers');
   }
}