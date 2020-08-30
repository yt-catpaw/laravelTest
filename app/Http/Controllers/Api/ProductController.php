<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Services\ProductService;

class ProductController extends Controller
{
    public $productService = null;

    public function __construct(){
        $this->productService = new ProductService();
    }

    public function getProduct(Request $request) {
        $products = $this->productService->findAll();

        return response()->json(['products' => $products]);
    }

    public function putCartProduct(Request $request) {
        $products = $this->productService->findAll();

        return response()->json(['products' => $products]);
    }
}
