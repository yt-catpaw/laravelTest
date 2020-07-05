<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品一覧</title>
</head>
<body>
    <div class="col-sm-4" style="padding:20px 0; padding-left:0px;">
        <form class="form-inline" action="{{ route('product.search')}}">
            <div class="form-group">
                <input type="text" name="keyword" value="{{ isset($keyword) ? $keyword : ''}}"  class="form-control" placeholder="商品名を入力してください。">
            </div>
            <input type="submit" value="検索" class="btn btn-info">
        </form>
    </div>
    <table>
        <tr>
            <th>
                商品名
            </th>
            <th>
                価格
            </th>
            <th>
                商品概要
            </th>
        </tr>
        @if (isset($products))
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->description }}</td>
            </tr>
        @endforeach
        @endif
    </table>
</body>
</html>