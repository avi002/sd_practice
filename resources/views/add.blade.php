<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Add employee</h2>
    <div>
        <form method='post' action="{{URL::to('insert-employee')}}">
        {{csrf_field()}}
        <div>
            <label for="">Name</label>
            <input type="text"name='name'>
        </div>
        <div>
            <label for="">Email</label>
            <input type="email"name='email'>
        </div>
        <div>
            <label for="">Date of birth</label>
            <input type="date"name='dob'>
        </div>
        <div>
            <input type="submit"name='submit' value='add'>
        </div>
        </form>
    </div>
</body>
</html>