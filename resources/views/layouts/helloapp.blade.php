<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <style>
        body {font-size:16pt; color:#999;}
        h1 {font-size:100pt; text-align:right; color:#f6f6f6f6; margin:-50px 0px -100px 0px; letter-spacing:-4pt;}
        ul { font-size:12pt;}
        hr { margin:25px 100px; border-top:1px dashed #ddd;}
        .menutitle { font-size:14pt; font-weight:bold; margin:0px;}
        .content { margin:10px;}
        .footer {text-align:right; font-size:14pt; margin:10px; border-bottom:1px solid #ccc; color:#ccc;}
    </style>
    <title>Blade/Index</title>
</head>
<body>
    <h1>@yield('title')</h1>
    @section('menubar')
    <h2 class="menutitle">※メニュー</h2>
    <ul>
        <li>@show</li>
    </ul>
    <hr size="1">
    <div class="">
        @yield('content')
    </div>
    <div class="">
        @yield('footer')
    </div>
</body>
</html>