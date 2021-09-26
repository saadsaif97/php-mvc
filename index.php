<?php

error_reporting(0);

require 'core/bootstrap.php';

// it loads the controller based on the request uri
require Router::load('routes.php')->direct(Request::uri(), Request::method());
