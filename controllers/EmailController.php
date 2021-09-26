<?php

class EmailController
{
   public function index()
   {
      $view = 'views/email.view.php';

      try {
         $emails = App::get('db')->selectAll('emails');
      } catch (PDOException $e) {
         die('Something went wrong :(');
      }

      require 'views/layout/layout.php';
   }

   public function send()
   {
      $data = [
         'email' => $_REQUEST['to'],
         'message' => $_REQUEST['message'],
      ];

      // store in db
      App::get('db')->insert('emails', $data);

      // send email
      $to      = $_REQUEST['to'];
      $subject = 'Email from my academy';
      $message = $_REQUEST['message'];
      $headers = 'From: myacademy@gmail.com';
      mail($to, $subject, $message, $headers);

      redirect('/php-mvc/email');
   }

   public function destroy($id)
   {
      App::get('db')->delete('emails', [$id]);
      return redirect('/php-mvc/email');
   }
}