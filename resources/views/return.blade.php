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
.navbar-brand {
    font-size: 24px;
    font-weight: bold;
    color: #fff;
    text-decoration: none;
    margin-left: 15px;
}

.container {
    max-width: 1000px;
    margin: 0 auto;
    padding: 20px;
}

.alert {
    background-color: #d4edda;
    border-color: #c3e6cb;
    color: #155724;
    padding: .75rem 1.25rem;
    margin-bottom: 20px;
    border-radius: .25rem;
}

.alert-success {
    background-color: #d1e7dd;
    border-color: #badbcc;
    color: #0c5460;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

th {
    background-color: #4CAF50;
    color: #fff;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

.btn {
    display: inline-block;
    font-weight: 400;
    color: #212529;
    text-align: center;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: #fff;
    border: 1px solid #ced4da;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: .25rem;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

.btn-primary {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
}

.btn-primary:hover {
    color: #fff;
    background-color: #0069d9;
    border-color: #0062cc;
}

.btn-primary:focus, .btn-primary.focus {
    box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .5);
}

.btn-primary.disabled, .btn-primary:disabled {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
}

.btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active,
.show > .btn-primary.dropdown-toggle {
    color: #fff;
    background-color: #0062cc;
    border-color: #005cbf;
}
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.sidebar {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #333;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidebar a {
  display: block;
  color: white;
  padding: 16px;
  text-decoration: none;
}

.sidebar a.active {
  background-color: #4CAF50;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
  background-color: #f1f1f1;
}

h1 {
  color: #333;
}

p {
  color: #666;
}



    </style>
</head>
<body>
<div class="sidebar">
    <b class="navbar-brand">Student Portal</b> <br><br>
    <a href="{{ route('dashboard') }}">Books</a>
    <a href="{{ route('borrow') }}">Borrow</a>
    <a class="active" href="{{ route('return') }}">Return</a>
    <a href="{{ route('myaccount') }}">My Account</a>
        <form id="logout-form" method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" style="display:none;"></button>
                </form>
                <a href="#" onclick="document.getElementById('logout-form').submit()">Logout</a>
  </div>
  @if (session('success'))
            <div class="alert alert-success" style="margin-left:20%;margin-top:10px;width:70%;">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger" style="margin-left:20%;margin-top:10px;width:70%;">
                {{ session('error') }}
            </div>
        @endif
  <div class="container" style="margin-left:40%;">
          <form action="{{ route('return-book') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" style="width:200px;margin-top:10%;" class="form-control" id="isbn" name="isbn" placeholder="Enter Book ISBN">
            </div>
            <button type="submit" style="margin-left:5%;" class="btn btn-primary">Return</button>
        </form>
    </div>
</body>
</html>
