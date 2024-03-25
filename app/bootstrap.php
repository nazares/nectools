<?php

use app\core\Router;

spl_autoload_register(function ($className) {
    $path = '../' . str_replace('\\', '/', $className) . '.php';
    if (file_exists($path)) {
        require_once $path;
    }
});

(new Router());
