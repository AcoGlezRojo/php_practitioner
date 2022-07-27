<?php

//load config and functions
$query = require 'app/bootstrap.php';
require 'app/functions.php';

//load controller from routes
require Router::load()->direct(Request::uri());