<?php

class HomeController
{
   public function index()
   {
      $view = 'views/home.view.php';

      $students = App::get('db')->selectAll('students');
      $teachers = App::get('db')->selectAll('teachers');
      $courses = App::get('db')->selectAll('courses');
      $emails = App::get('db')->selectAll('emails');

      require 'views/layout/layout.php';
   }

   public function downloadReport()
   {

      $students = count(App::get('db')->selectAll('students'));
      $teachers = count(App::get('db')->selectAll('teachers'));
      $courses = count(App::get('db')->selectAll('courses'));
      $emails = count(App::get('db')->selectAll('emails'));

      $text = "
         MY ACADEMY REPORT:

         *************************
         Total Students: $students \n
         Total Teachers: $teachers \n
         Total Courses: $courses \n
         Total Emails: $emails \n
         *************************
      ";

      $handle = fopen("file.txt", "w");
      fwrite($handle, $text);
      fclose($handle);

      header('Content-Type: application/octet-stream');
      header('Content-Disposition: attachment; filename='.basename('file.txt'));
      header('Expires: 0');
      header('Cache-Control: must-revalidate');
      header('Pragma: public');
      header('Content-Length: ' . filesize('file.txt'));
      readfile('file.txt');
      exit;

      redirect('/php-mvc/');
   }
}