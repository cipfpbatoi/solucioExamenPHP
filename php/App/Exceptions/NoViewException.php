<?php

namespace Examen\Exceptions;

class NoFoundException extends \Exception
{
    public function __construct($message = "Found No View", $code = 0, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}