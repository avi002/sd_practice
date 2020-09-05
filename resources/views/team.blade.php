<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>This is team page</h2>
    <p>{{$myname}}</p>
    <ul>
    @foreach($mydogs as $d)
    <li>
    {{$d}}
    </li>
    @endforeach
    </ul>
</body>
</html>