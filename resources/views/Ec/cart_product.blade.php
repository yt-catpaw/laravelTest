@extends('layouts.base')
@section('title', 'Tutrial for beginner')

@section('content')
    @if(isset($products[0]) )
        <div class="col-md-9">
            <div class="page-header">
                <h1 style="text-align:center;"><small>商品一覧</small></h1>
            </div>

            <div class="row">
                @foreach ($products as $product)
                <div class="col-md-4">
                    <div class="thumbnail">
                        <a href="">
                            <img alt="猫" src="{{ asset('/assets/img/neko.png') }}">
                        </a>
                    </div>
                    <div class="caption">
                        <p><b>{{ $product->name }}</b></p>
                        <p>{{ $product->price }}</p>
                        <p><a href="{{ route('product.list') }}" class="btn btn-primary">商品一覧に戻る</a></p>
                        <p><a href="{{ route('cart.deleteProduct') }}" class="btn btn-danger">カートから削除する</a></p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    @else
        <p>カートに入れている商品がございません。</p>
        <p><a href="{{ route('product.list') }}" class="btn btn-primary">商品一覧に戻る</a></p>
    @endif
@endsection