<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Portal</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-xmFkyg5vYB9erFipkaXcPMLzLHevFgLIz4IEYzY4+iM3JqE4nPFFX9V03bXaGkIv" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
    href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* nav-bar styling */
        body,html {
    height: 100%;
}


    </style>
</head>
<body>
    <div class="container-fluid h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3">
    
                <form action="{{ route('register') }}" method="POST">
                    <div class="form-group">
                        <label for="student_id">Please enter a new pin</label>
                        <input type="text" name="student_id" id="student_id" class="form-control" value="{{ $new }}" required readonly>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control" placeholder="New PIN" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="New PIN" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
                <br>
                <form action="{{ route('login') }}" method="POST">
                    <div class="form-group">
                        <input type="text" name="student_id" id="student_id" class="form-control" placeholder="Enter Student ID" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Enter PIN" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
    
    
</body>
</html>
