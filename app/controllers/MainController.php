<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Main;

class MainController extends Controller
{
    public $data;
    public $model;

    public function indexAction()
    {

        if (!empty($_POST)) {
            $this->data = $this->model->getData($_POST);
        }

        $vars = [
            'title' => 'NEC Univerge SV8300 Name Converter',
            'data' => $this->data
        ];

        $this->view->render('Main Page', $vars);
    }

    public function forwardAction()
    {
        if (!empty($_POST)) {
            $this->data = $this->model->callForward($_POST);
        }

        $vars = [
            'data' => $this->data
        ];

        $this->view->render('Call Forwarding-Busy Line/No
        Answer [command E6]', $vars);
    }
}
