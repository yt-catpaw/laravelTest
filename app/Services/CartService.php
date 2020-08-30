<?php

namespace App\Services;

use App\Repositories\ProductRepository;

class CartService {

    public $productRepository = null;

    public function __construct(){
        $this->productRepository = new ProductRepository();
    }

    public function findById($productId) {

        $product = $this->productRepository->findById($productId);

        return $product;
    }
}