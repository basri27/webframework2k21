<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Tittle</title>
</head>
<body>
    <li>
        @foreach ($news as $new)
        <ul>{{ $new->tittle }}</ul>
        @endforeach
    </li>
</body>
</html>