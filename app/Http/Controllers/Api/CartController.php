<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function __construct(){

    }

    public function putCartProduct( Request $request, $productId) {

        $productIds = $request->session()->get('productId');

        if ( is_null($productIds) || !in_array($productId, $productIds) ) {
            $request->session()->push('productId', $productId);
        }

        //ここで返却値を返す。code 200？エラーメッセージ？
    }

    public function deleteCartProduct(Request $request) {

        $request->session()->flush();

        //ここで返却値を返す。
    }
}
