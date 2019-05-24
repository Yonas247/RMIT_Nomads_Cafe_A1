<?php
	session_start();
	
	if(isset($_POST['username']))
	{
		if($_POST['username'] == 'admin' && $_POST['password'] =='admin')
		{
			$_SESSION['logged_in'] = 'true';
		}
		else
		{
			echo '<i> incorrect login details. Please try again</i> <br/>';
		}
	}

	if(! (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 'true'))
	{
		echo '
				<html lang="en">
				 <head>
				  <meta charset="UTF-8">
				  <title>Document</title>
				  <link rel="stylesheet" href="css/styles.css">
				 </head>
				 <body class="loginPage">
						<div class="title"> <h1> Sign In Form</h1></div>
						<div class="container">
							<div class="left"></div>
							<div class="right">
								<div class="formBox">
									<form = action="' . $_SERVER['PHP_SELF'] . '"method="POST">
										<p>Username</p>
										<input type= "text" name="username" placeholder="Username">
										<p>Password</p>
										<input type= "Password" name="password" placeholder="Password">
										<input type="submit" name="" value="Login">
										<a href="signup.php"> Dont have an account?SignUp</a>
										<br/>
										<br/>
										<a href="#"> Forgot Password</a>
										</form>
								</div>
							</div>
						</div>
				 </body>
				</html>
			';
	exit;
	}
	
?>