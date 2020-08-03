@extends('layouts.base')
@section('title', 'Tutrial for beginner')

@section('content')
    <form class="form-inline pt-5" action="{{ route('product.search')}}">
        <div class="form-group">
            <input type="text" name="keyword" value="{{ isset($keyword) ? $keyword : ''}}"  class="form-control" placeholder="商品名を入力してください。">
        </div>
        <button type="submit" class="btn btn-info">検索</button>
    </form>
<<<<<<< Updated upstream
    @if (isset($products))
        <div class="col-md-9">
            <div class="page-header">
                <h1><small>商品一覧</small></h1>
=======
    @if (0 < count($products))
        <div class="row mt-5">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">メニュー</div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="#">トップへ</a></li>
                        <li class="list-group-item"><a href="#">欲しいものリスト</a></li>
                        <li class="list-group-item"><a href="#">注文履歴</a></li>
                        <li class="list-group-item"><a href="#">ヘルプ</a></li>
                    </ul>
                </div>
>>>>>>> Stashed changes
            </div>
            <div class="col-md-9">
                <div class="page-header" style="padding-bottom:0px;">
                    <h1><small>商品一覧</small></h1>
                    <hr>
                </div>
    
                <div class="row">
                    @foreach ($products as $product)  
                    <div class="col-md-4 border" style="text-align:center; padding-top: 10px;margin-bottom: 10px;">
                        <div>
                            <img alt="猫" src="{{ asset('/assets/img/neko.png') }}">
<<<<<<< Updated upstream
                        </a>
                    </div>
                    <div class="caption">
                        <p><b>{{ $product->name }}</b></p>
                        <p> {{ $product->price }}</p>
                        <p><a href="" class="btn btn-primary">to cart</a></p>
=======
                            <div class="caption">
                                <p><b>{{ $product->name }}</b></p>
                                <p>{{ $product->price }}</p>
                                <form action="{{ route('cart.putProduct', ['product_id' =>  $product->id ]) }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-primary mb-3"　 value="">カートに追加する</button>
                                </form>
                            </div>
                        </div>
>>>>>>> Stashed changes
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    @else
        <p>商品がございません</p>
    @endif
@endsection