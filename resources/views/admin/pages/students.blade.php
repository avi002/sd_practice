<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Students</title>
</head>
<body>
    <div class="container">
        <h2 style="text-align: center">Students List</h2>
            <a href="{{URL::to("add-student")}}" style="float: right"><button type="button" class="btn btn-primary">Add</button></a>
        <table class="table table-hover">
            <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Date of birth</th>
                <th>Edit</th>
            </thead>
            <tbody>
                @foreach($slist as $s)
                <tr>
                <td>{{$s->name}}</td>
                <td>{{$s->email}}</td>
                <td>{{$s->dob}}</td>
                <td><a href="{{URL::to('edit-student/'.$s->id)}}">Edit</a>/
                    <a href="{{URL::to('delete-student/'.$s->id)}}">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>