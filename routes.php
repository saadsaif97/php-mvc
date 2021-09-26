<?php

$router->get('', 'HomeController@index');
$router->get('students', 'StudentController@index');
$router->get('teachers', 'TeacherController@index');
$router->get('courses', 'CourseController@index');
$router->get('email', 'EmailController@index');


$router->post('', 'HomeController@downloadReport');
$router->post('students', 'StudentController@store');
$router->post('teachers', 'TeacherController@store');
$router->post('courses', 'CourseController@store');
$router->post('email', 'EmailController@send');
