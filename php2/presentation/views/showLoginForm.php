<!-- Login Page -
//Login html
//Stanley Backlund
//Module designs the log in page -->
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="start.css">
</head>
<body>

	
	<h1 class="ontop">
	Welcome to Build Army
	</h1>
	<div class="backing">
	</div>
	<div class="container" >
	<h2>Please Login</h2>
	<form class= "formbox" action= "../handlers/processlogin.php" method= "post">
	 <input type= "text" name= "name" placeholder = "Username"> <br>
	<input type= "password" name="pass" placeholder = "Password"> <br>
	<input class = "form-button" type= "submit" >
	<p class= message> Not registered? <a href= "showRegistrationForm.php">Create an Account</a>
	
	</p>
	</form>
	</div>
	
</body>
</html>