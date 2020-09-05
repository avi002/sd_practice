<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Edit Student</h2>
    <form method='post' action="{{URL::to('store-student')}}">
    {{csrf_field()}}
    <div><label for="">Name</label><input type="text" name='name'value="{{$student->name}}"></div>
    <div><label for="">Mail</label><input type="email" name='mail'value='{{$student->email}}'></div>
    <div><label for="">Date of birth</label><input type="date" name='dob'value='{{$student->dob}}'></div>
    <div><input type="submit"name='submit'value='Add'></div>
</body>
</html>