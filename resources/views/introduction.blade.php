<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>自己紹介</title>
</head>
<body>
    <h1>自己紹介ページ</h1>
    <p>名前： {{ $name }}</p>
    <p>年齢：{{ $age }}歳</p>
    <h2>趣味</h2>
    <ul>
        @foreach($hobbies as $hobby)
        <li>{{ $hobby }}</li>
        @endforeach
    </ul>
</body>
</html>