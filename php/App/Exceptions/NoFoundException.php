<?php

namespace Examen\Exceptions;

class NoViewException extends \Exception
{
    public function __construct($message = "Register Not Found", $code = 0, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}