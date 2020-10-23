<?php

session_start();

date_default_timezone_set('America/Sao_Paulo');

spl_autoload_register(function($class){
    include('classes/' . $class . '.php');
});

// Load Composer's autoloader
require 'vendor/autoload.php';

define('INCLUDE_PATH', 'http://localhost/projeto1-Dankicode/');
define('INCLUDE_PATH_PAINEL', INCLUDE_PATH . 'painel/');



define('HOST', 'localhost');
define('USER', 'root');
define('DATABASE', 'projeto1-Dankicode');
define('PASSWORD', '');

// Funções

function getCargo($idCargo) {
    $arr = [
        '0' => 'Normal',
        '1' => 'Sub Administrador',
        '2' => 'Administrador',
    ];

    return $arr[$idCargo];

}








?>