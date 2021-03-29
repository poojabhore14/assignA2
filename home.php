<?php
 
session_start();
 
if(!isset($_SESSION['un']))
 
{
 
    echo "<h3 align='center'>Please <strong>Login</strong> again <a href='login.php '>Click Here to Login</a></h3>";
 
}
 
else

{

 
    $now = time();
 // checking the time now when home page starts
 
    if($now > $_SESSION['expire'])
 
    {
 
        session_destroy();
 
      
        echo "<h3 align='center'><strong>Your session has expired !</strong> <a href='login.php'>Login Here</a></h3>";
 
    }
 
    else
 
  { 
 //starting this else one [else1]
  

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

    <title>YOUR DETAILS</title>
    <style>
      body {background-color: powderblue;}
      .text-center{
        color: #cc0099;

      }
      .word{
        color: #6600cc

      }
    </style>

  </head>
  <body>
    <?php




echo "
<div  class= container my-xl-5>
    <h1 class=text-center>Heyy ".$_SESSION['un']."</h1><br>
    <h1 class=text-center my-5><div class= word>****** FILL YOUR DETAILS ****** </h1>
    </div>

    </div>";



?>
<div class="container my-4">
<div class="card my-5" style="width: 100%;">
  <div class="card-body">
 
<form method=post action='display.php' >
      <div class="form-group">
        <label for="inputEmail4">Name</label>
        <input type="text" class="form-control" id="inputEmail4" name="nm" required>
      </div>
      <div class="form-group">
        <label for="inputPassword4">Roll No</label>
        <input type="text" class="form-control" id="inputPassword4" name="rno" required>
    </div>
    <div class="form-group">
        <label for="inputEmail4">City</label>
        <input type="text" class="form-control" id="inputEmail4" name="ci" required>
      </div>
      <div class="my-4 text-center">
      <button type="submit" class="btn btn-primary">Submit</button>
      </div>
</form>
    </div>
    </div>



    <?php

  }

}
?>




      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>