<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP入門</title>
</head>
<body>
    <h1>書籍情報</h1>
    <p>書籍名：{{ $title }}</p>
    <p>価格：{{ number_format($price) }}円</p>
    <h2>ジャンル</h2>

    <ul>
        @foreach($genres as $genre)
        <li>{{$genre}}</li>
            @endforeach
    </ul>
</body>
</html>