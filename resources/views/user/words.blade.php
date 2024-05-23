<!DOCTYPE html>
<html>
<head>
    <title>生词本</title>
</head>
<body>
    <h1>生词本</h1>
    <ul>
        @foreach($words as $word)
            <li>{{ $word->word }} - {{ $word->context }}</li>
        @endforeach
    </ul>
</body>
</html>