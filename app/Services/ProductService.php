<?php

namespace App\Services;

use App\Repositories\ProductRepository;

class ProductService {

    public $productRepository = null;

    public function __construct(){
        $this->productRepository = new ProductRepository();
    }

    public function findAll() {
        $products = $this->productRepository->findAll();

        return $products;
    }

    public function findByName($keyword) {
        $products = $this->productRepository->findByName($keyword);

        return $products;
    }
}
