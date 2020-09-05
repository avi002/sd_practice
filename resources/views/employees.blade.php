<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <h2>
    Employee list
    </h2>
    <a href="{{URL::to('add-employee')}}">Add Employee</a>
    <table>
    <thead>
    <th>Name</th>
    <th>email</th>
    <th>Date of birth</th>
    </thead>
    <tbody>
    @foreach($employees as $emp)
    <tr>
    <td>{{$emp->name}}</td>
    <td>{{$emp->email}}</td>
    <td>{{$emp->dob}}</td>
    </tr>
    @endforeach
    </tbody>
    </table>
    </div>
</body>
</html>