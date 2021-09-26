<?php


class CourseController
{
   public function index()
   {
      $view = 'views/course.view.php';

      try {
         $courses = App::get('db')->selectAll('courses');
      } catch (PDOException $e) {
         die('Something went wrong :(');
      }

      require 'views/layout/layout.php';
   }

   public function store()
   {
      App::get('db')->insert('courses', $_REQUEST);

      return header('Location: /php-mvc/courses');
   }

   public function destroy($id)
   {
      App::get('db')->delete('courses', [$id]);
      return redirect('/php-mvc/courses');
   }
}