<!DOCTYPE html>
<html lang="en">
<head>
  <title>TATA DIGITAL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

    <style>
        
        .align-center {
            width: 40%;
            margin: 0px auto;
            display: block;
            margin-top: 8%;
            background-color: #f2f4f3;
            padding: 2% 2% 2% 2%;
            border-radius: 8px;
        }
        .top-img img {
            width: 70%;
            margin: 0px auto;
            display: block;
            margin-bottom: 20px;
        }
        @media only screen and (max-width: 900px) {
            .align-center {
                width: 100%;
                padding: 2% 5% 2% 5%;
            }
            body {
                background-color: #f2f4f3;
            }
        }
    </style>

<div class="align-center">
    <div class="top-img">
        <img src="{{asset('images/tata-logo.png')}}">
    </div>
  <form action="/login" method="POST">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter username" name="Username">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="Password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
