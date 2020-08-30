@extends('layouts.base')
@section('title', 'Tutrial for beginner')

@section('content')
    <form class="form-inline pt-5" action="{{ route('product.search')}}">
        <div class="form-group">
            <input type="text" name="keyword" value="{{ isset($keyword) ? $keyword : ''}}"  class="form-control" placeholder="商品名を入力してください。">
        </div>
        <button type="submit" class="btn btn-info">検索</button>
    </form>
   
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
        </div>
        <div class="col-md-9">
        @if (0 < count($products))
            <div class="page-header" style="padding-bottom:0px;">
                <h1><small>商品一覧</small></h1>
                <hr>
            </div>
            <div class="row" id="app">
                <cart-add-component></cart-add-component>
            </div>
        </div>
        @else
            <p>商品がございません</p>
        @endif
    </div>
@endsection