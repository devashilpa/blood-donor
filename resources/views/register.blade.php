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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <title>Document</title>
    <style>
      
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
                <a href="/userlogin" class="nav-link"><b>Login</b></a>
            </li>
            <li class="navbar-item">
                <a href="/logout" class="nav-link"><b>Logout</b></a>
            </li>
        </ul>
    </nav>
    </header>
       <div clas="container"  style="border:solid red;padding-top:20px; margin:20px;">                    
<center>        
           <h4 style="color:red; text-size:20px;"><u>Register</u></h4>
          <div class="col">
          <form action="/RegisterAction" method="post" id="form" style="color:white;background-color:black;">
               @csrf
               <div class="form-group">
                 <label for="name">Name:</label>
                 <input type="text" name="name" id="name" class="form-control" placeholder="enter your name">
               </div>
               <div class="form-group">
                 <label for="ge">Age</label>
               <input type="number" name="age" id="age" class="form-control" min="18" max="60"placeholder="enter your age">
               </div>
               <div class="form-group">
                 <label for="gender">Gender:</label> male
                 <input type="radio" name="gender" id="gender1" >
                 female<input type="radio" name="gender" id="gender2"  >
               </div>
               <div class="form-group">
                   <label for="blood_grup">Blood group</label>
                 <select name="blood_group" id="blood_group" class="form-control">
                     <option value="A+ve">A+ve</option>
                     <option value="A-ve">A-ve</option>
                     <option value="B+ve">B+ve</option>
                     <option value="AB+ve">AB+ve</option>
                     <option value="AB-ve">AB-ve</option>
                     <option value="O+ve">O+ve</option>
                     <option value="O-ve">O-ve</option>
                     <option value="bombay group">Bombay group</option>
                     <option value=""></option>
                 </select>
               </div>
               <div class="form-group">
                 <label for="email">Email:</label>
                 <input type="email" name="email" id="email" class="form-control" placeholder="enter your mail id">
               </div>
               <div class="form-group">
                 <label for="date">Last donation date:</label>
                 <input type="date" name="date" id="date" class="form-control" placeholder="enter  date">
               </div>
               <div class="form-group">
                 <label for="password">password:</label>
                 <input type="password" name="password" id="password" class="form-control" >
               </div>
               <div class="form-group">
                   <input type="submit" value="Register" name="submit" id="submit" class="btn btn-danger btn-md">
               </div>
           </form>
        </div>
           </center>
  </div>
  <footer>
        <nav class="navbar justify-content-center navbar-expand-md bg-primary navbar-dark" >
           <ul class="navbar-nav">
               <li class="nav-item"> email:blooddonorbank@gamil.com</li>
               <li class="nav-item"> phone Number:+91 9874563214</li>
           </ul>
        </nav>
    </footer>
</body>
<script>

</script>
</html>