<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Add Students</h2>
    <form method='post' action="{{URL::to('store-student')}}">
    @csrf
        <div>
        <label for="">Name</label>
        <input type="text" name='name'>
        </div>
        <div>
        <label for="">Email</label>
        <input type="email" name='email'>
        </div>
        <div>
        <label for="">DOB</label>
        <input type="date" name='dob'>
        <div>
        <input type="submit" name='submit'>
        </div>
        </div>
    </form>
</body>
</html>