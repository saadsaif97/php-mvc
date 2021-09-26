<?php ob_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
   <title>PHP MVC</title>
</head>
<body>

   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <div class="container">
      <a class="navbar-brand" href="/php-mvc">My Academy</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
         <ul class="navbar-nav ml-auto my-2 my-lg-0 navbar-nav-scroll" style="max-height: 100px;">
            <li class="nav-item">
               <a class="nav-link" href="/php-mvc/">Home</span></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="/php-mvc/students">Students</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="/php-mvc/teachers">Teachers</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="/php-mvc/courses">Courses</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="/php-mvc/email">Email</a>
            </li>
         </ul>
      </div>
   </div>
   </nav>

   <?php require($view); ?>


   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <script>
      // this function adds the active class to active link automatically
      $(function() {
         $('nav a[href="/php-mvc/' + location.pathname.split("/")[2] + '"]').addClass('active');
      });

   </script>
</body>
</html>