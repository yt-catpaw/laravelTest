<?php

namespace App\Http\Controllers\Ec;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Services\CartService;

class CartController extends Controller
{
    protected $cartServiceService = null;

    public function __construct(){
        $this->cartService = new CartService();
    }

    public function putCartProduct( Request $request, $productId) {

        $productsId = $request->session()->get('productId');

        if ( is_null( $productsId) || !in_array($productId, $productsId) ) {
            $request->session()->push('productId', $productId);
        }

        return view('ec.cart_add');
    }

    public function showCartProducts( Request $request ) {

        $productiIds = $request->session()->get('productId');

        $products = [];
        if ( isset( $productiIds) && 0 < count($productiIds)) {
            foreach ( $productiIds as $productId) {
                $product = $this->cartService->findById($productId);
                array_push($products, $product);
            }
        }

        return view('ec.cart_product', ['products' => $products]);
    }

    public function deleteCartProduct(Request $request) {

        $request->session()->flush();

        return redirect('/product');
    }
}
