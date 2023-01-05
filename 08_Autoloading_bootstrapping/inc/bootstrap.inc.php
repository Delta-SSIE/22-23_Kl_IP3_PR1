<?php
function my_autoloader($classname){
    require_once __DIR__ . "/$classname.class.php";
}

spl_autoload_register("my_autoloader");

error_reporting(E_ALL);

require __DIR__ . "/../vendor/autoload.php";
use Tracy\Debugger;
Debugger::enable();
