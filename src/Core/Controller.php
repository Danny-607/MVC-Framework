<?php

namespace App\Core;

class Controller
{
    protected function view($view, $data = [])
    {
        extract($data);
        $viewPath = __DIR__ . '/../Views/' . $view . '.php';
        if (file_exists($viewPath)) {
            require $viewPath;
        } else {
            echo "View not found: $viewPath";
        }
    }

    protected function model($model)
    {
        $modelPath = __DIR__ . '/../Models/' . $model . '.php';
        if (file_exists($modelPath)) {
            require_once $modelPath;
            return new $model();
        } else {
            echo "Model not found: $modelPath";
        }
    }
}