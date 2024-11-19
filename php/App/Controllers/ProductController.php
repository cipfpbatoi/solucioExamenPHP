<?php
namespace Examen\Controllers;

class ProductController {
    public function index() {
        echo 'ProductController index';
    }
    public function show($id) {
        echo 'ProductController show ' . $id;
    }
    public function create() {
        echo 'ProductController create';
    }
    public function store() {
        echo 'ProductController store';
    }
    public function edit($id) {
        echo 'ProductController edit ' . $id;
    }
    public function update($id) {
        echo 'ProductController update ' . $id;
    }
    public function destroy($id) {
        echo 'ProductController destroy ' . $id;
    }

}

