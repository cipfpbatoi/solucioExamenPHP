<?php

namespace Examen\Services;

use BatoiBook\Exceptions\NoViewException;

class ViewsService
{
    public static function loadView($view, $data = [])
    {
        $viewPath = str_replace('.', '/', $view);
        extract($data);

        $file =  $_SERVER['DOCUMENT_ROOT'] . "/../views/$viewPath.view.php";

        if (!file_exists($file)){
            throw new NoViewException();
        }
        include $file;

    }


}