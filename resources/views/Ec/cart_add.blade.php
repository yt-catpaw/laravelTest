@extends('layouts.base')
@section('title', 'Cart Add')

@section('content')
    <div class="container">
        <p>カートに商品を追加しました。</p>
        <p><a href="{{ route('product.list') }}" class="btn btn-primary">商品一覧へ</a></p>
    </div>
@endsection