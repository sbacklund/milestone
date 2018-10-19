
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Login/Create Account</title>
</head>

<link rel="stylesheet" type="text/css" href="start.css">

<body>
	<h2>
	CREATE AN
	</h2>
	<div class="container" >
	<form class= "formbox" action= "../handlers/processRegistration.php" method= "get">
	<input type= "text" name="nameid" placeholder="Username"> <br>
	<input type= "password" name="pass" placeholder="Password"> <br>
	<input type= "text" name="first" placeholder="First Name"> <br>
	<input type= "text" name="last" placeholder="Last Name"> <br>
	<input class = "form-button" type= "submit">
	
	</form>
	</div>
	<h2>
	ACCOUNT
	</h2>

</body>
</html>