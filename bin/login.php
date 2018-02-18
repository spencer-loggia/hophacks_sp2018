<?php
session_start();
ob_start();
?>
<link rel="stylesheet" type="text/css" href="login.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!-- All the files that are required -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

<?php
include ('db.php');
include ('validate_token.php');
include ('header.php');




$user_info = validateToken();
echo $user_info['username'];
$un = $user_info['username'];

if($user_info['username'] == 'GUEST' || $user_info['role'] > 1) {

	 ?>
	<!-- LOGIN FORM -->
	<div class="text-center" style="padding:50px 0">
		<div class="logo">Login</div>
		<!-- Main Form -->
		<div class="login-form-1">
			<form id="login-form" class="text-left" method="post">
				<div class="login-form-main-message"></div>
				<div class="main-login-form">
					<div class="login-group">
						<div class="form-group">
							<label for="lg_username" class="sr-only">Username</label>
							<input type="text" class="form-control" id="lg_username" name="lg_username" placeholder="username">
						</div>
						<div class="form-group">
							<label for="lg_password" class="sr-only">Password</label>
							<input type="password" class="form-control" id="lg_password" name="lg_password" placeholder="password">
						</div>
						<!-- <div class="form-group login-group-checkbox">
							<input type="checkbox" id="lg_remember" name="lg_remember">
							<label for="lg_remember">remember</label>
						</div> -->
					</div>
					<button type="submit" name="submitL" class="login-button"><i class="fa fa-chevron-right"></i></button>
				</div>
				<!-- <div class="etc-login-form">
					<p>forgot your password? <a href="#">click here</a></p>
					<p>new user? <a href="#">create new account</a></p>
				</div> -->
			</form>
		</div>
		<!-- end:Main Form -->
	</div>

	<!-- REGISTRATION FORM -->

	<div class="text-center" style="padding:50px 0">
		<div class="logo">register</div>
		<!-- Main Form -->

		<div class="login-form-1">
			<form id="register-form" method="post" class="text-left">
				<div class="login-form-main-message"></div>
				<div class="main-login-form">
					<div class="login-group">
						<div class="form-group">
							<label for="reg_username" class="sr-only">Email address</label>
							<input type="text" class="form-control" id="reg_username" name="reg_username" placeholder="username">
						</div>
						<div class="form-group">
							<label for="reg_password" class="sr-only">Password</label>
							<input type="password" class="form-control" id="reg_password" name="reg_password" placeholder="password">
						</div>
						<div class="form-group">
							<label for="reg_password_confirm" class="sr-only">Password Confirm</label>
							<input type="password" class="form-control" id="reg_password_confirm" name="reg_password_confirm" placeholder="confirm password">
						</div>

						<div class="form-group">
							<label for="reg_email" class="sr-only">Email</label>
							<input type="text" class="form-control" id="reg_email" name="reg_email" placeholder="email">
						</div>
						<div class="form-group">
							<label for="reg_fullname" class="sr-only">Full Name</label>
							<input type="text" class="form-control" id="reg_fullname" name="reg_fullname" placeholder="full name">
						</div>

						<div class="form-group login-group-checkbox">
							<input type="radio" class="" name="reg_gender" id="doctor" placeholder="username">
							<label for="doctor">doctor</label>

							<input type="radio" class="" name="reg_gender" id="patient" placeholder="username">
							<label for="patient">patient</label>
						</div>

						<div class="form-group login-group-checkbox">
							<input type="checkbox" class="" id="reg_agree" name="reg_agree">
							<label for="reg_agree">i agree with <a href="#">terms</a></label>
						</div>
					</div>
					<button type="submit" name="submitR" class="login-button"><i class="fa fa-chevron-right"></i></button>
				</div>
				<div class="etc-login-form">
					<p>already have an account? <a href="#">login here</a></p>
				</div>
			</form>
		</div>
	</div>
	<?php
	// Active assert and make it quiet
	assert_options(ASSERT_ACTIVE, 1);
	assert_options(ASSERT_WARNING, 0);
	assert_options(ASSERT_QUIET_EVAL, 1);

	// Create a handler function
	function my_assert_handler($file, $line, $code)
	{
	    echo "<hr>Assertion Failed:
	        File '$file'<br />
	        Line '$line'<br />
	        Code '$code'<br /><hr />";
	}

	// Set up the callback
	assert_options(ASSERT_CALLBACK, 'my_assert_handler');
	//when reg form is submitted:

	//if login form is submitted
	if (isset($_POST['submitL'])){
		?>
		<script>
		alert("submitted");
		</script>
		<?php

			$salted_pass = $_POST['lg_password']. '@$?JF29jY@$E';
			$hash = hash('SHA256', $salted_pass);

			$un = $_POST['lg_username'];
			$result = $mysqli->query("SELECT * FROM users WHERE name ='$un'");

			$row = $result->fetch_assoc();


			if($row['name'] == $_POST['lg_username'] && $row['password'] == $hash)
			{
				$token = hash('SHA256', rand());

				//setcookie('username', $un, time()+60*60*24);
				//setcookie('token', $token, time()+60*60);
				$_SESSION['username']=$un;
				$_SESSION['token']=$token;

				//echo "session token---".$_SESSION['token']."<br>";

				//get the data in the
				$Results = $mysqli -> query("UPDATE users SET token = '$token' WHERE name = '$un'");
				$row = $result->fetch_assoc();

				?>
				<script>
					window.location = "login.php";
				</script>
	            <?php

				exit();
			    //below needs updated info....

				}

			else{
				echo "username or password mismatch";
			}
}



	if (isset($_POST['submitR'])){
		?>
		<script>
		alert("submitted");
		</script>
		<?php
		echo"submitted";
			// Username Length
	  if( strlen($_POST['reg_username']) < 4 || strlen($_POST['reg_username']) > 20 ) {

	    $error['username'] = 'Your user name must be between 4-20 characters.';
	  }

	  //Password Length
	  else if( strlen($_POST['reg_password']) < 6 || strlen($_POST['reg_password']) > 50 ) {

	    $error['password'] = 'Your password must be between 5-50 characters.';
	  }

	  // If there are no errors...
	  else if(count($error) === 0) {
			echo "no errors\n";

		 $un = $_POST['reg_username'];

		 if(isset($_POST['doctor'])){$level=0;}
		 else if(isset($_POST['patient'])){$level=1;}
		 else {$level = 2;}


		 $Results = $mysqli->query("SELECT name FROM users WHERE name = '$un'");
		 $Results = $Results->fetch_assoc();
			 if(strlen($Results['name']) <= 3){

					$salted_pass = $_POST['reg_password']. '@$?JF29jY@$E';
					$hash = hash('SHA256', $salted_pass);

					$token = hash('SHA256', rand());

					$email = $_POST['reg_email'];


					//setcookie('username', $un, time()+60*60*24);
					//setcookie('token', $token, time()+60*60);

					$_SESSION['username']=$un;
					$_SESSION['token']=$token;

					echo ($un);

					$Results = $mysqli -> query("INSERT INTO users (name, email, password, token, role) VALUES ('$un', '$email', '$hash', '$token', '$level')");

					header('Location: index.php');
		  	exit;
			 }

		else {echo "username in use! Try again";}
		}

	}
}


else {
	session_destroy();
	?>
		    <script>
		      window.location = "login.php";
		    </script>
		  <?php
		}
 ?>
<!-- end:Main Form -->

<!-- FORGOT PASSWORD FORM
<div class="text-center" style="padding:50px 0">
	<div class="logo">forgot password</div>
	<!-- Main Form
	<div class="login-form-1">
		<form id="forgot-password-form" class="text-left">
			<div class="etc-login-form">
				<p>When you fill in your registered email address, you will be sent instructions on how to reset your password.</p>
			</div>
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="fp_email" class="sr-only">Email address</label>
						<input type="text" class="form-control" id="fp_email" name="fp_email" placeholder="email address">
					</div>
				</div>
				<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
			</div>
			<div class="etc-login-form">
				<p>already have an account? <a href="#">login here</a></p>
				<p>new user? <a href="#">create new account</a></p>
			</div>
		</form>
	</div>
	<!-- end:Main Form
</div>
-->
