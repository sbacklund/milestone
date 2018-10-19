
<?php

session_start();
$_SESSION = array();

session_destroy();

header('Refresh:2; url=showLoginForm.php');
echo "Redirecting you to login page";
?>