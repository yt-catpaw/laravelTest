@extends('layouts.base')
@section('title', 'Tutrial for beginner')

@section('content')
    <form class="form-inline" action="{{ route('product.search')}}">
        <div class="form-group">
            <input type="text" name="keyword" value="{{ isset($keyword) ? $keyword : ''}}"  class="form-control" placeholder="商品名を入力してください。">
        </div>
        <button type="submit" class="btn btn-info">検索</button>
    </form>
    @if (isset($products))
        <div class="col-md-9">
            <div class="page-header">
                <h1><small>商品一覧</small></h1>
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
                        <p> {{ $product->price }}</p>
                        <p><a href="" class="btn btn-primary">to cart</a></p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    @else
        <p>商品がございません</p>
    @endif
@endsection