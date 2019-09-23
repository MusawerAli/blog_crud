<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
  .box{
      width:600px;
      margin:0 auto;
      border:1px solid #ccc;
  }
  .has-error
   {
    border-color:#cc0000;
    background-color:#ffff99;
   }
  </style>
  
    <title>Email Available</title>
    <div class="container box">
    <h3 align="center">Live Email Availablir</h3>

    <div class="form-group">
    <label for="email">
    <input type="text" name="email" id="email" class="form-control input-lg"  />
    <span id="error_email"></span>
    </label>
    </div>

    <div class="form-group">
    <label for="password">
    <input type="password" name="password" id="password" class="form-control input-lg"  />
   
    </label>
    </div>

    <div class="form-group" align="center">

        <button type="button" name="register" id="register" class="btn btn-info btn-lg">Register</button>
    </div>
{{csrf_field()}}
    </div>
</head>
<body>
    
</body>
</html>

<script>
$(document).ready(function(){

    $('#email').blur(function(){
        var error_email = '';
        var email = $('#email').val();
        var _token = $('input[name="_token"]').val();
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!filter.test(email))
        {
            $('#email').addClass('has-error');
            $('#error_email').html('<label class="text-danger">Invalid Email</label>');
            $('#register').attr('disabled','disabled');
        }
        else
        {
            $.ajax({
                url:"{{route('email_available.check')}}",
                method:"POST",
                data:{email:email,_token:_token},
                success:function(result)
                {
                    if(result=='unique')
                    {
                        $('#error_email').html('<label class="text-success">Email Available</label>');
                        $('#email').removeClass('has-error');
                        $('#register').attr('disabled',false);

                    }
                    else
                    {
                        $('#error_email').html('<label class="text-danger">Email Not available</label>');
                        $('#email').addClass('has-error');
                        $('#register').attr('disabled','disabled');
                    }
                }
            });
        

        }
    });
});
</script>