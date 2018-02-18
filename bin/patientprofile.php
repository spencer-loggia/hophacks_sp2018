<?php
include('header.php');
?>

<!-- Importing Bootstrap-->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="navbar-custom.css">


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- load ajax -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



<body>
  <div class="container-fluid">

    <!-- Styles (so that we can see the grid) -->
    <style>
    .bs-example  div[class^="col"] {
      border: 15px solid white;
      background: rgba(0, 245, 255, 0.08);
      text-align: center;
      padding-top: 8px;
      padding-bottom: 8px;
    }
    </style>

    <!-- Page Content -->
    <div class="container">

      <!-- Portfolio Item Heading -->
      <h1 class="my-4">Your Profile
        <small></small>
      </h1>

      <!-- Portfolio Item Row -->
      <div class="row">

        <div class="col-md-3">
          <img class="img-fluid" src="../media/placeholder.png" style="width:200px;height:150px;border:0;" alt="">
        </div>
        <div class="col-md-4">
          <h4 class="my-3"> Overview </h4>
          <ul>
            <li> Name: </li>
            <li> Age: </li>
            <li> Location: </li>
          </ul>
        </div>
          </div>

          <!-- jQuery library -->
          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

          <!-- Popper -->
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

          <!-- Latest compiled and minified Bootstrap JavaScript -->
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

          <!-- Initialize Bootstrap functionality -->
          <script>
          // Initialize tooltip component
          $(function () {
            $('[data-toggle="tooltip"]').tooltip()
          })

          // Initialize popover component
          $(function () {
            $('[data-toggle="popover"]').popover()
          })
          </script>
        </body>
