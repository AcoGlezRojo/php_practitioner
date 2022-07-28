<?php

//load config and functions
require 'vendor/autoload.php';
$query = require 'app/bootstrap.php';
require 'app/functions.php';

//load controller from routes
require Router::load()->direct(Request::uri(), Request::method());
