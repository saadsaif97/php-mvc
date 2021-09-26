<?php

require 'core/App.php';

App::set('config', require 'config.php');
require 'core/database/Connection.php';
require 'core/Request.php';
require 'core/database/QueryBuilder.php';

$pdo = Connection::make(App::get('config')['database']);
App::set('db', new QueryBuilder($pdo));

require 'core/functions.php';
require 'core/Router.php';