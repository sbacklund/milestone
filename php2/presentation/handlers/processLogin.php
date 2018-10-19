<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
require_once '../../database/SecurityService.php';

$ss = new SecurityService(addslashes($_POST['name']),addslashes($_POST['pass']));
//calls the security service class and uses the authenticate method to valid user from form
if($ss->authenticate() == false){
    echo "Login has failed <br>";
    
    echo "Try Again<br>"; 
    
}
else{
    //echo "Success";
    header('Location: ../views/showTopMenu.php');
}




?>
