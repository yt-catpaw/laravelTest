<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository {

    protected $model = 'mt_products';

    public function findAll() {

        $products = Product::where('active_flg', '=', config('global.active'))
                     ->get();

        return $products;
    }

    public function findByName($keyword) {

        $products = Product::where('active_flg', '=', config('global.active'))
                             ->where('name', 'like', '%'. $keyword . '%')
                             ->get();

        return $products;
    }

    public function findById($productId) {

        $product = Product::where('active_flg', '=', config('global.active'))
                             ->where('id', '=', $productId)
                             ->first();

        return $product;
    }
}
