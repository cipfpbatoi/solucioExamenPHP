<?php

use Examen\Controllers\ProductController;
use Examen\Exceptions\NoFoundException;

session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . '/../vendor/autoload.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/../Helpers/functions.php';

$pc = new ProductController();

try {
    $pc->destroy($_GET['id']);
    header('location:index.php');
} catch (NoFoundException $e )
{
    echo $e->getMessage();
}
