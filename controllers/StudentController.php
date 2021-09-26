<?php


class StudentController
{
   public function index()
   {
      $view = 'views/student.view.php';

      try {
         $students = App::get('db')->selectAll('students');
      } catch (PDOException $e) {
         die('Something went wrong :(');
      }

      require 'views/layout/layout.php';
   }

   public function store()
   {
      App::get('db')->insert('students', $_REQUEST);

      return header('Location: /php-mvc/students');
   }

   public function destroy($id)
   {
      App::get('db')->delete('students', [$id]);
      return redirect('/php-mvc/students');
   }
}