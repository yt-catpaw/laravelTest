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

        $productIds = $request->session()->get('productId');

        if ( is_null($productIds) || !in_array($productId, $productIds) ) {
            $request->session()->push('productId', $productId);
        }

        return view('ec.cart_add');
    }

    public function showCartProducts( Request $request ) {

        $productIds = $request->session()->get('productId');

       

        $products = [];
        if ( isset( $productIds) && 0 < count( $productIds)) {
            foreach ( $productIds as $productId) {
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
