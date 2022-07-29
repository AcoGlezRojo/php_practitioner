<?php

//load config and functions
require 'vendor/autoload.php';
$query = require 'app/bootstrap.php';
require 'app/functions.php';

use App\Classes\{Router, Request};

//load controller from routes
Router::load()->direct(Request::uri(), Request::method());
