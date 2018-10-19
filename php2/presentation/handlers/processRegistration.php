<?php
/////////////////////////////////////////////////////////////////////////////
$fname = addslashes($_GET['first']);
$lname= addslashes($_GET['last']);
////////////////////////////////////////////////////////////////////////////////
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
require_once '../../businessServices/SecurityService.php';

$ss = new SecurityService(addslashes($_GET['nameid']),addslashes($_GET['pass']));
//calls the security service class and uses the authenticate method to valid user from form
if($ss->createUser($fname,$lname) == false){
    echo "User creation has failed";
    
}
else{
    //echo "Success";
    header('Location: ../views/showLoginForm.php');
}




   