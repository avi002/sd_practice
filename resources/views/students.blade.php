<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Students List</h2>
    <table border="2">
    <thead>
    <th>Name</th>
    <th>Email</th>
    <th>Date of birth</th>
    <th>Edit</th>
    </thead>
    <tbody>
    <tr>
    @foreach($slist as $s)
    <td>{{$s->name}}</td>
    <td>{{$s->email}}</td>
    <td>{{$s->dob}}</td>
    <td><a href="{{URL::to('edit-student/'.$s->id)}}">Edit</a></td>
    @endforeach
    </tr>
    </tbody>
    </table>
</body>
</html>