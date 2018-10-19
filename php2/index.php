<?php

session_start();

if (!isset($_SESSION['username'])) {
    header('Refresh:3; url=presentation/views/showLoginForm.php');
    echo "You must login first, redirecting you to login page";
    exit;
}
else {
    header('Refresh:3; url=presentation/views/showLoginForm.php');
    echo "Redirecting you to login page";
    exit;
    }
        
?>
