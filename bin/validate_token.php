<?php session_start(); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>validate_token</title>
</head>

<body>
<?php


function validateToken(){
	include ("db.php");


	if(isset($_SESSION['username']) && isset($_SESSION['token'])) {

		$un = $_SESSION['username'];

		$result = $mysqli->query("SELECT * FROM users WHERE name ='$un'");

		$row = $result->fetch_assoc();

		echo "SQL token-----". $row['token']."<br>";
		echo "session token---".$_SESSION['token']."<br>";

		if($row['token'] == $_SESSION['token'] ) {
			//login succsessful!!!!!!!!!!!! :) :)
		return array('username'=>$un, 'role'=>$row['role']);
		}

		else {
			return array('username'=>'GUEST', 'role'=>2);
		}

	}
	else {return array('username'=>'GUEST', 'role'=>2);}

}

?>
</body>
</html>
