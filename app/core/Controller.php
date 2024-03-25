<?php

namespace App\Core;

abstract class Controller
{
    public array $route;
    public $model;
    public $view;

    public function __construct($route)
    {
        $this->route = $route;
        $this->view = new View($route);
        $this->model = $this->loadModel($route['controller']);
    }

    public function loadModel($name)
    {
        $model = 'app\models\\' . ucfirst($name);
        if (class_exists($model)) {
            return new $model();
        }
    }
}
