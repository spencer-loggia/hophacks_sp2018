<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>db</title>
</head>

<body>
<?php

$mysqli = new mysqli("localhost", "root", "p1o8p1o8", "hophacks");
/* if(isNull($mysqli)){
  echo "FAILLLLLLLLLLLL";
}*/
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


?>

</body>
</html>
