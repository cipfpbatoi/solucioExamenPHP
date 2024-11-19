<?php

namespace Examen\Models;

use Examen\Services\Database;
use PDO;

class Product {

    private $elements;

    public function __construct(array $data=[])
    {
        foreach ($data as $key => $value){
            $this->elements[$key] = $value;
        }
    }

    public function __get($index){
        return isset($this->elements[$index]) ? $this->elements[$index] : null;
    }

    public function __set($key,$value){
        $this->elements[$key] = $value;
        return $this;
    }

    

}
