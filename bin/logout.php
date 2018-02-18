<!-- logout -->
<?php
session_start();
include ('validate_token.php');
ob_start();


$temp_un = $_SESSION['username'];

  unset($_SESSION['token']);

  $mysqli->query("UPDATE users SET token = '0' WHERE name = '$temp_un'");
  ?>
    <script>

    </script>
