<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h2>Image Upload</h2>
        @if(Session::has('msg'))
            <div>{{Session::get('msg')}}</div>
        @endif
        <div>
            <form action="{{URL::to('store-image')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <label for="image">Image</label>
                <input type="file" name="picture" id="">
                <button type="submit">Upload</button>
            </form>
        </div>
    </div>
</body>
</html>