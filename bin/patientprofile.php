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
          <img class="img-fluid" src="../media/placeholdpatient.jpeg" style="width:200px;height:150px;border:0;" alt="">
        </div>
        <div class="col-md-4">
        <div class="card card-body">
        <h4 class="card-title">Overview</h4>
        <ul class="card-text">
          <li> Name: <b> Ann Handley </b> </li>
          <li> Age: <b> 12 </b> </li>
          <li> Location: <b> World Lego Headquarters </b></li>
        </ul>
        </div>
          </div>
        </div>

        <div class="row">
          <p></p>
        </div>
        <div class="row">
          <p></p>
        </div>
        <div class="row">
          <div class="col-md-5">
          <div class="card card-body">
          <h4 class="card-title">About Me</h4>
          <p class="card-text">
            “Ann Handley is a veteran of creating and managing digital content to build lego creations for organizations and individuals. Ann is the author of the Wall Street Journal bestseller  Everybody Writes: Your Go-To Guide to Creating Ridiculously Good Lego (September 2014, Wiley) and co-author of the best-selling book on lego marketing, Lego Rules: How to Create Killer Blocks, Podcasts, Videos, Ebooks, Webinars (and More) That Engage Customers and Ignite Your Kids (2011, Wiley). She is the Chief Content Officer of MarketingProfs; a LinkedIn Influencer; a keynote speaker, dad, and writer.”
          </p>
          </div>
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
        <!-- Footer -->
          <footer class="py-5 bg-secondary">
            <div class="container">
              <p class="m-0 text-center text-white"> <b>TeleMed 2018 </b></p>
            </div>
            <!-- /.container -->
          </footer>