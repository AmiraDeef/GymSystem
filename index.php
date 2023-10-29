<?php

const BASE_PATH = __DIR__ . '/../';

require 'function.php';



spl_autoload_register(function ($class) {
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    require base_path("{$class}.php");
});


require 'Core/DataBase_G.php';
require 'router.php';
