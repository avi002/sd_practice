<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Add Student</title>
</head>
<body>
    <div style="text-align: center" class="container">
        <h2>Add Students</h2>
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
            <form method='post' action="{{URL::to('store-student')}}">
                @csrf
                <div class="form-group">
                    <label for="">Name</label>
                    <input class="form-control" type="text" name='name'>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input class="form-control" type="email" name='email'>
                </div>
                <div class="form-group">
                    <label for="">DOB</label>
                    <input class="form-control" type="date" name='dob'>
                    <div>
                        <input type="submit" name='submit' class="btn btn-success">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</body>
</html>