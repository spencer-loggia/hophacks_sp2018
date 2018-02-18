//logout php
<?php
  session_destroy();
  header("Location: login.php");
  ?>

    <script>
      window.location = "login.php";
    </script>
