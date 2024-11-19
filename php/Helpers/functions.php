<?php
    function loadView($view, $data = [])
    {
       \Examen\Services\ViewsService::loadView($view, $data);
    }

    function dd(...$data )
    {
        echo "<pre>";
        foreach ($data as $d) {
            var_dump($d);
        }

        echo "</pre>";
        die();
    }



