<?php

use Examen\Controllers\ProductController;

session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . '/../vendor/autoload.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/../Helpers/functions.php';

$pc = new ProductController();

$pc->index();