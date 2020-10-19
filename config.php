<?php

session_start();

spl_autoload_register(function($class){
    include('classes/' . $class . '.php');
});

// Load Composer's autoloader
require 'vendor/autoload.php';

define('INCLUDE_PATH', 'http://localhost/projeto1-Dankicode/');
define('INCLUDE_PATH_PAINEL', INCLUDE_PATH . 'painel/');












?>