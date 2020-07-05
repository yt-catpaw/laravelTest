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
        // \Log::debug(Hash::make("12345678"));

        return view('ec.product_list', ['products' => $products]);

    }

    public function productSearch( Request $request ) {
        
        //$keywordのバリデーションが必要？その場合は、index routeにredirect?
        $keyword = $request->keyword;
        // dd($keyword);

        $products = $this->productService->findByName($keyword);
        // \Log::debug(Hash::make("12345678"));

        return view('ec.product_list', ['products' => $products])->with('keyword', $keyword);

    }
}
