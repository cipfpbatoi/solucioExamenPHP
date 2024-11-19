<?php

use Examen\Controllers\ProductController;
use Examen\Exceptions\NoFoundException;

session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . '/../vendor/autoload.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/../Helpers/functions.php';

$pc = new ProductController();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $pc->update($_POST['id'],$_POST);
    header('location:index.php');
    exit();
} else {
    $pc->edit($_GET['id']);
}


