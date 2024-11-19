<?php
namespace Examen\Controllers;

use Examen\Services\Database;

class ProductController {
    public function index() {
        $products = Database::getAll();
        loadView('products',compact('products'));
    }
    public function show($id) {
        echo 'ProductController show ' . $id;
    }
    public function create() {
        loadView('create_product');
    }
    public function store($request) {
        Database::store($request);
    }
    public function edit($id) {
        $product = Database::find($id);
        loadView('update_product',compact('product'));
    }
    public function update($id,$request) {
        $product = Database::update($id,$request);
    }
    public function destroy($id) {
        Database::delete($id);
    }

}

