<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Student Details</title>
  </head>
  <body>

  <?php

 
session_start();

$_SESSION['n']=$_POST['nm'];

$_SESSION['r']=$_POST['rno'];

$_SESSION['c']=$_POST['ci'];


echo "


<div class=container  style=width: 18rem;>
<div class=card-body>
<div class=card style=width: 100%;>
  <div class=card-body>
 
    <h2 class=card-title>Student Details</h2>
  </div>
  <ul class=list-group list-group-flush>
    <li class=list-group-item>Name : ".$_SESSION['n']."</li>
    <li class=list-group-item>Roll No : ".$_SESSION['r']."</li>
    <li class=list-group-item>City : ".$_SESSION['c']."</li>
  </ul>





      

";
?>

  <div class="container my-4 text-center">

  <a class="btn btn-primary"data-toggle="modal" data-target="#exampleModal" href="#" role="button">Log Out </a>

  </div>
  </div>

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Log Out</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        are you sure?
      </div>
      <div class="modal-footer">
        <a href="logout.php" role="button" class="btn btn-danger">YES</a>
        <button type="button" class="btn btn-success" data-dismiss="modal">NO</button>
      </div>
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