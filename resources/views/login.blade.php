<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Login</title>
    <style>
    .box{
      width:600px;
      margin:0 auto;
      border:1px solid #ccc;
      padding:20px
    }
    </style>
</head>
<body>
    <div class="container w3-padding-24">

@if()

@endif
    <div class="row">
    <div class="col-sm-6 box">
    <h3>Simple Login System in Laravel</h3>
    <br />
    <form action="" method="POST">
    {{csrf_field()}}
    <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" class="form-control">
    </div>

    <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" />

    </div>

    <div class="form-group">
    <input type="submit" value="Login" class="btn btn-primary" name="login">
    </div>
    </form>
    </div>
    </div>
    </div>
</body>
</html>