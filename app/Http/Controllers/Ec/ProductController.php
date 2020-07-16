<?php

namespace App\Http\Controllers\Ec;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Services\ProductService;

class ProductController extends Controller
{
    public $productService = null;

    public function __construct(){
        $this->productService = new ProductService();
    }

    public function index(Request $request) {

        $products = $this->productService->findAll();

        return view('ec.product_list', ['products' => $products]);

    }

    public function productSearch( Request $request ) {

        $keyword = $request->keyword;

        $products = $this->productService->findByName($keyword);

        return view('ec.product_list', ['products' => $products])->with('keyword', $keyword);

    }
}
