<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー一覧</title>
</head>
<body>
    @if (isset($users))
        @foreach ($users as $user)
            <P>{{ $user->name }}</p>
        @endforeach
    @endif
</body>
</html>