<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- load ajax -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Start page for hophacks sp 2018-->
<link rel="stylesheet" href="base.css">

<html lang="en">

  <head>
    <?php
    include ('db.php');
    include ('validate_token.php');

    //get current user info from token validation
    $user_info = validateToken();

    //if not logged in
    if($user_info['username'] == 'Guest' || $user_info['role'] > 1) {
    ?>
    <meta name="twitter:" content="">
    <h1> Welcome to hophacks 2018! </h1>
  <?php }
    else if ($user_info['username'] == 'Guest' || $user_info['role'] <= 1){
      <h1> you are logged in! </h1>
    }?>
  </head>
  <body>
    <div class="background">

    </div>
  </body>

</html>
