<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div style="text-align: center" class="container">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
            <h2>Edit Student</h2>
            <form method='post' action="{{URL::to('update-student/'.$student->id)}}">
            {{csrf_field()}}
            <div class="form-group">
            <label for="">Name</label>
            <input class="form-control" type="text" name='name'value="{{$student->name}}">
            </div>
            <div class="form-group">
            <label for="">Mail</label>
            <input class="form-control" type="email" name='email'value='{{$student->email}}'>
            </div>
            <div class="form-group">
            <label for="">Date of birth</label>
            <input class="form-control" type="date" name='dob'value='{{$student->dob}}'>
            </div>
            <div>
            <input class="btn btn-success" type="submit"name='submit'value='update'></div>
        </div>
        <div class="col-md-3"></div>
    </div>
</body>
</html>