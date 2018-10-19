<?php

class SecurityService
{
    private $username;
    private $password;
    public function __construct($n,$p){
    $this->username=$n;
    $this->password=$p;
        
    }
    public function authenticate(){
        //returns a successful login bool
        require_once 'dbconnect.php';
        $db = new dbconnect();
        $connection = $db->getConnect();
        if ($connection) {
            $sql_statement = "SELECT * FROM `user` WHERE `UserName` = '$this->username' AND `password` = '$this->password' LIMIT 1";
            $result = mysqli_query($connection, $sql_statement);
            if ($result) {
                if (mysqli_num_rows($result) == 1) {
                    //echo "Login successful<br>";
                    $row = mysqli_fetch_assoc($result);
                    $_SESSION['username'] = $row['UserName'];
                    $_SESSION['id'] = $row['idUser'];
                    $_SESSION['role']= $row['Role'];
                    //creates new session user
                    return true;
                }
                else {
                    return false;
                    exit;
                }
            }
            else {
                echo "error" . mysqli_error($connection);
                exit;
            }
        }
        else {
            echo "Error connecting " . mysqli_connect_errno();
            exit;
        }
    }
    public function createUser($firstname , $lastname){
        require_once 'dbconnect.php';
        $connection = mysqli_connect($servername, $username, $password, $dbname);
        if ($connection) {
            $mysql_get_users = "SELECT * FROM `user` where username='$this->username'";
            
            $usernamers = mysqli_query($connection, $mysql_get_users);
            $count = mysqli_num_rows($usernamers);
            
            if ($count >= 1) {
               return false;
            } else {
                
                $sql_statement = "INSERT INTO `user` (`idUser`, `username`,`password`,`First`,`Last`) VALUES (NULL, '$this->username','$this->password','$firstname','$lastname')";
                
                $result = mysqli_query($connection, $sql_statement);
                
                if ($result) {
                   return true;
                } else {
                    return false;
                }
            }
    }
}
}

