<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Title</title>
</head>
<body>
<h1>sample</h1>
<div id="app">
    <sample-component></sample-component>
</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>