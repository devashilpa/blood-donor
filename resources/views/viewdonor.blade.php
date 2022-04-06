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
    <title>Blood-Donor</title>
</head>
<body>
    <header>
    <nav class="navbar justify-content-center navbar-expand-md bg-danger navbar-dark">
        <ul class="navbar-nav">
            <li class="navbar-item">
                <a href="/" class="nav-link"><b>Home</b></a>
            </li>
            <li class="navbar-item">
                <a href="/userlogin" class="nav-link"><b>Login</b></a>
            </li>
            <li class="navbar-item">
                <a href="/viewdonor" class="nav-link"><b>Donors</b></a>
            </li>
        </ul>
    </nav>  
</header>
<form action="/search" method="post" role="search">
    @csrf
    <div class="input-group">
        <input type="text" class="form-control" name="searchdonor"
            placeholder="Search users"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
    </div>
</form>
<table class="table table-hover table-success table-striped">
    <tr>
        <th>Donor Name</th>
        <th>Age</th>
        <th> Blood group</th>
        <th> email</th>
        <th>last Donation Date </th>
        <th>  password</th
    </tr>
    @foreach($result as $value)
    <tr>
        @if($value->email!="admin@gmail.com")
        <td>{{$value->name}}</td>
        <td>{{$value->age}}</td>
        <td>{{$value->blood_group}}</td>
        <td>{{$value->email}}</td>
        <td>{{$value->last_donation_date}}</td>
        <td>{{$value->password}}</td>
        @endif
    </tr>
 
    @endforeach

</table>
    <footer>
        <nav class="navbar justify-content-center navbar-expand-md bg-primary navbar-dark" >
           <ul class="navbar-nav">
               <li class="nav-item"> email:blooddonorbank@gamil.com</li>
               <li class="nav-item"> phone Number:+91 9874563214</li>
           </ul>
        </nav>
    </footer>
</body>
</html>