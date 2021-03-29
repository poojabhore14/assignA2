<?php

session_start();

if(@$_POST['sign1'])

{

	$u = $_POST['user'];

	$p = $_POST['pass'];

	if($u =="pooja" && $p=="123")

	{

	$_SESSION['un'] = $u;

	$_SESSION['start'] = time();

	 // taking now logged in time
	$_SESSION['expire'] = $_SESSION['start'] + (1 * 30) ; 

	// ending a session in 30 second from the starting time
	header('Location: home.php');

	}

	else

	{

	$err= "<font color='red'>Invalid user login </font>";

	}

}



?>











<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">

    <title>Login</title>
    <style>
    body {background-color: powderblue;}
    .text-center{
      color: #3366ff; 

    }
    </style>

  </head>

  <body>
  <!-- Login Form-->

  <div class="container my-5 col-xl-3 mx-auto ">
    <h1 class="text-center ">Login</h1>
    <div class="card my-4" style="width: 100%;">
  <div class="card-body">
 
    <form method=post>
          <div class="mb-2">
            <label  class="form-label">Username :</label>
            <input type="text" class="form-control" name="user"  placeholder="Enter Your Username" required >
          </div>

          <div class="mb-3">
            <label  class="form-label">Password :</label>
            <input type="text" class="form-control" name="pass"  placeholder="Enter Your Password" required>
        </div>
        <div class="text-center">
        <button type="submit" class="btn btn-primary" value="SignIN" name="sign1" >LOGIN</button>
        </div>
        
      </form>
      </div>
      </div>
      </div>


  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>