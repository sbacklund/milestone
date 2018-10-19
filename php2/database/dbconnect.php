<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
//Database connector
//Stanley Backlund
//CST_236
//10/5/2018
class dbconnect {
    private $dbserver;
    private $dbusername; 
    private $dbpassword;
    private $dbname;
    function dbconnect(){
       $this->dbserver = "localhost";
       $this->dbname = "php2";
       $this->dbpassword = "root";
       $this->dbusername = "root";
    }
    function  getConnect(){
        $connection = new mysqli($this->dbserver,$this->dbusername,$this->dbpassword,$this->dbname);
        if($connection->connect_error){
            echo "connection failed" . $connection->connect_error . "<br>";
        }
        else {
            return $connection;
        }
        
    }
    
}