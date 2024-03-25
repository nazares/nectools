<?php

namespace app\core;

class Router
{
    protected $controller = 'main';
    protected $action = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->getUrl();
        if (!isset($url[1])) {
            if (!empty($url[0])) {
                $this->action = $url[0];
                unset($url[0]);
            }
        } else {
            $this->controller = $url[0];
            $this->action = $url[1];
            unset($url[0], $url[1]);
        }

        $controller = 'app\controllers\\' . ucfirst($this->controller) . 'Controller';
        $action = $this->action . 'Action';
        $route = ['controller' => $this->controller, 'action' => $this->action];
        $this->params = $url ? array_values($url) : [];

        if (class_exists($controller)) {
            $controller = new $controller($route);
            if (method_exists($controller, $action)) {
                call_user_func_array([$controller, $action], $this->params);
            } else {
                View::httpErrorCode(404);
            }
        } else {
            View::httpErrorCode(404);
        }
    }

    public function getUrl()
    {
        $url = trim($_SERVER['REQUEST_URI'], '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/', $url);

        return $url;
    }
}
