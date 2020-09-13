<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
     @endif
    <div>
        <form action="{{URL::to('store-employee')}}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name</label>
            <input type="text" name="name" id="" class="form-control" value="{{old('name')}}" required>
                <span>{{$errors->first('name')}}</span>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="" class="form-control" value="{{old('email')}}" required>
                <span>{{$errors->first('email')}}</span>
            </div>
            <div class="form-group">
                <label for="salary">Salary</label>
                <input type="number" name="salary" id="" class="form-control" value="{{old('salary')}}" required>
                <span>{{$errors->first('salary')}}</span>
            </div>
            <div class="form-group">
                <label for="dob">DOB</label>
                <input type="date" name="dob" id="" class="form-control" value="{{old('dob')}}" required>
                <span>{{$errors->first('dob')}}</span>
            </div>
            <div class="form-group">
                <input type="submit" name="" id="" class="form-control">
            </div>
        </form>
    </div>
</body>
</html>