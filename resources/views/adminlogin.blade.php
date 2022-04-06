<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
    <style>
        body{
            background-image:url('./image/image2.jpg');
            background-repeat:no-repeat;
            background-size:100%;
        }
    </style>
</head>
<body>
<header>
    <nav class="navbar justify-content-center navbar-expand-md bg-danger navbar-dark">
        <ul class="navbar-nav">
            <li class="navbar-item">
                <a href="/" class="nav-link"><b>Home</b></a>
            </li>           
            <li class="navbar-item">
                <a href="/adminlogin" class="nav-link"><b>Login</b></a>
            </li>
            <li class="navbar-item">
                <a href="/logout" class="nav-link"><b>Logout</b></a>
            </li>
        </ul>
    </nav>
    </header>

<div class="container">
    <center>
    <form action="/adminloginAction" method="post" style="color:white">
        @csrf 
        <div class="form-group">
            <label for="email">email:</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="enter mail isd">
        </div>
        <div class="form-group">
          <label for="password"> password:</label>
          <input type="password" name="password" id="password" class="form-control">
        </div>
        <div class="form-group">
         <input type="submit" value="login" class="btn btn-md btn-danger">
        </div>
        @if(session('error'))
               <p style="color:red">
            {{session('error')}}</p>@endif
           </div>
    </form>
    </center>
</div>

    <footer style="padding-top:20%">
        <nav class="navbar justify-content-center navbar-expand-md bg-primary navbar-dark" >
           <ul class="navbar-nav">
               <li class="nav-item"> email:blooddonorbank@gamil.com</li>
               <li class="nav-item"> phone Number:+91 9874563214</li>
           </ul>
        </nav>
    </footer>
</body>
</html>