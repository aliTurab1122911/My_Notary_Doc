<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>MND User Base</title>
  </head>
  <style>
      @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Poppins:wght@400;500;600&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body,.bdy{
    margin: 0;
    padding: 0;
    background: linear-gradient(262deg,#CAC531, #F3F9A7);
    background-size: cover;
    height: 100vh;
    /* overflow: hidden; */
}
.center{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 400px;
  border-radius: 10px;
}
.center h1{
  text-align: center;
  padding: 20px 0;
  color:white;
}
.center form{
  padding: 0 40px;
  box-sizing: border-box;
}
form .txt_field{
  position: relative;
  border-bottom: 2px solid #adadad;
  margin: 30px 0;
}
.txt_field input{
  width: 100%;
  padding: 0 5px;
  height: 40px;
  font-size: 16px;
  border: none;
  background: none;
  outline: none;
}
.txt_field label{
  position: absolute;
  top: 50%;
  left: 5px;
  color: #adadad;
  transform: translateY(-50%);
  font-size: 16px;
  pointer-events: none;
  transition: .5s;
}
.txt_field span::before{
  content: '';
  position: absolute;
  top: 40px;
  left: 0;
  width: 0%;
  height: 2px;
  background: #2691d9;
  transition: .5s;
}
.txt_field input:focus ~ label,
.txt_field input:valid ~ label{
  top: -5px;
  color: #2691d9;
}
.txt_field input:focus ~ span::before,
.txt_field input:valid ~ span::before{
  width: 100%;
}
.pass{
  margin: -5px 0 20px 5px;
  color: #a6a6a6;
  cursor: pointer;
}
.pass:hover{
  text-decoration: underline;
}
input[type="submit"]{
  width: 100%;
  height: 50px;
  border: 1px solid;
  background: #CAC531;
  border-radius: 25px;
  font-size: 18px;
  color: #e9f4fb;
  font-weight: 700;
  cursor: pointer;
  outline: none;
}
input[type="submit"]:hover{
  background: #F3F9A7;
  transition: .5s;
  color:#212121;
}
.signup_link{
  margin: 30px 0;
  text-align: center;
  font-size: 16px;
  color: #666666;
}
.signup_link a{
  color: #CAC531;
  text-decoration: none;
}
.signup_link a:hover{
  text-decoration: underline;
}
hr{
    height:80%;
    color: white;
}
.center#cc{
        justify-content:space-around;
    vertical-align:center;
    display:flex;
    flex-direction:row;
}
.inner{
    display:flex;
    flex-direction:column;
    padding-left:10px;
    padding-right:10px;
    padding-bottom:15px;
    padding-top:10px;
}
.inner#ls{
    padding-right:10px;
}
.inner#rs{
    padding-left:10px;
}
#sep{
    width:5px;
    background:white;
    border-radius:5px;
    color:white;
}
  </style>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="mynotarydoc.com">My Notary Doc</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
  <ul class="navbar-nav">
       <li class="nav-item">
        <a id="navRegister" class="nav-link" href="#">Register</a>
      </li>
      <li class="nav-item">
        <a id="navLogin" class="nav-link" href="#">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Logout</a>
      </li>

      
     
    </ul>
  </div>
</nav>

<div id='zero'>
    <div class="bdy" id='bdy1'>
        <div class="center" id='cc'>
            <div class="inner" id='ls'>
            <h1>Sign In</h1>
            <button href="#" class="btn btn-primary" id='ez'>Continue</button>
            </div>
            <div id='sep'>|
            </div>
            <div class="inner" id='rs'>
            <h1>Sign Up</h1>
            <button href="#" class="btn btn-primary" id='ez1'>Im New</button>
        </div>
                
            </div>
        
    </div>
</div>

<div id='first'>
    <div class="center">
      <h1>Login</h1>
      <form action="login_info.php" method="post">
        <div class="txt_field">
          <input type="text" name="uname" id="uname" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="pass" id="pass" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Login">
      </form>
    </div>
    
</div>




<div id='second' style="visibility: visible;position:absolute;top:80%; left:50%;transform:translate(-50%,-50%);width:100vw;height:100vh;">
<div class="container mt-4">
<h3 style="text-align: center;">Please Register Here:</h3>
<hr>




<!--<!DOCTYPE html>-->
<!--<html>-->
<!--<head>-->
<!--<meta charset="utf-8">-->
<!--<title>Registration</title>-->
<!--<link rel="stylesheet" href="css/style.css" />-->
<!--</head>-->
<!--<body>-->
<!--require('db.php');-->

<!--if (isset($_REQUEST['username'])){-->

<!--	$username = stripslashes($_REQUEST['username']);-->
        
<!--	$username = mysqli_real_escape_string($con,$username); -->
<!--	$email = stripslashes($_REQUEST['email']);-->
<!--	$email = mysqli_real_escape_string($con,$email);-->
<!--	$password = stripslashes($_REQUEST['password']);-->
<!--	$password = mysqli_real_escape_string($con,$password);-->
<!--	$trn_date = date("Y-m-d H:i:s");-->
<!--        $query = "INSERT into `users` (username, password, email, trn_date)-->
<!--VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";-->
<!--        $result = mysqli_query($con,$query);-->
<!--        if($result){-->
<!--            echo "<div class='form'>-->
<!--<h3>You are registered successfully.</h3>-->
<!--<br/>Click here to <a href='login.php'>Login</a></div>";-->
<!--        }-->
<!--    }else{-->
<!--?>-->
<!--<div class="form">-->
<!--<h1>Registration</h1>-->
<!--<form name="registration" action="" method="post">-->
<!--<input type="text" name="username" placeholder="Username" required />-->
<!--<input type="email" name="email" placeholder="Email" required />-->
<!--<input type="password" name="password" placeholder="Password" required />-->
<!--<input type="submit" name="submit" value="Register" />-->
<!--</form>-->
<!--</div>-->
<!--</body>-->
<!--</html>-->









<form action="signup_info.php" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Username</label>
      <input type="text" class="form-control" name="username" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" name ="password" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
      <label for="inputPassword4">Confirm Password</label>
      <input type="password" class="form-control" name ="confirm_password" id="inputPassword" placeholder="Confirm Password">
    </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="secc" style="display: flex; justify-content: center;">
      <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>
</div>
    
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  <script>
  const el0 = document.getElementById('zero');
      const el = document.getElementById('second');
      const el1 = document.getElementById('first');
      const frt_btn = document.getElementById('ez');
      const frt_btn1 = document.getElementById('ez1');

      const navRegister = document.getElementById("navRegister");
      const navLogin = document.getElementById("navLogin");
      console.log(el);
      el1.style.visibility = 'hidden';
      el.style.visibility = 'hidden';
      frt_btn.addEventListener("click", ezFunction);
      navLogin.addEventListener("click", ezFunction);
      frt_btn1.addEventListener("click", ezFunction1);
      navRegister.addEventListener("click", ezFunction1);
      function ezFunction(){
      el0.style.visibility = 'hidden';
      el.style.visibility = 'hidden';
      el1.style.visibility = 'visible';
      }
      function ezFunction1(){
      el0.style.visibility = 'hidden';
      el1.style.visibility = 'hidden';
      el.style.visibility = 'visible';
      }

  </script>
</html>