<?php session_start();
//This is a partial html page that we use on almost everypage. Simply shows some tabs and establishes some css for the rest of the page?>
<html>
<title>BuyArmy</title>
<head>
<link rel="stylesheet" type="text/css" href="topmenu.css">
</head>
</html>
<body>
<h1>Welcome to Buy Army</h1>
<div class="container">
<?php
if (!isset($_SESSION['username'])):
?>
<span class="menu-item"> <a href="login.html">Login</a></span>
<?php endif; ?>
 <span class="menu-item"><a href="showSearchForm.php?pageNumber=1">Search</a></span><span class="menu-item"></span><span class="menu-item" ><a href="../handlers/logout.php">Logout</a> </span>
<?php if ($_SESSION['role']== 'admin') : ?>
	<span class="menu-item"><a href="admin.html">Admin Page</a></span>
<?php endif; ?>
</div>





</body>
