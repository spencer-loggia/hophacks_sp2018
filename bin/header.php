<!-- DOCTYPE -->
<?php
  session_start();
 ob_start ();


 ?>
<html lang="en">
  <head>
    <title>Telemed</title>
    <meta charset="utf-8">
    <!-- Viewport Meta Tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="navbar-custom.css">
  </head>

  <body>


    <!-- YOUR CONTENT STARTS HERE -->

    <header class="navbar navbar-expand navbar-dark flex-column flex-md-row  bd-navbar">
        <!-- Brand -->
    <a class="navbar-brand" href="#">
      <img src="../media/banner.png" style="width:120px;height:35px;border:0;">
    </a>

  <a class="navbar-brand mr-0 mr-md-2" href="/" aria-label="Bootstrap">
</a>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="patientprofile.php">My Profile
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
      </ul>
    </div>



  <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
    <li class="nav-item dropdown">
      <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Menu
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="bd-versions">
          <font color="#ffffff">
        <a class="dropdown-item active" href="#">My Profile</a>
        <a class="dropdown-item" href="#">Cases</a>
      </font>
      </div>
    </li>
  </ul>
  <form method="post" name="logout_form" >
  <input type="submit" class="btn btn-bd-download d-none d-lg-inline-block mb-3 mb-md-0 ml-md-3" name="logout_button" value="Switch User / Login" />
</form>
</header>

  <?php
    if (isset($_POST['logout_button'])){
      ?>
      <script>
      alert("submitted");
      </script>
      <?php
        $temp_un = $_SESSION['name'];
        echo "here".$temp_un;
        session_destroy();
        $mysqli->query("UPDATE users SET token = '0' WHERE name = '$temp_un'");
        header('Location: login.php');
    }
   ?>



    <!-- YOUR CONTENT ENDS HERE -->


    <!-- JavaScript: placed at the end of the document so the pages load faster -->
		<!-- jQuery library -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

		<!-- Popper -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

		<!-- Latest compiled and minified Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
