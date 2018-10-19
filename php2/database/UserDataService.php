<?php 
//Object class for search handler, contains query methods
//Stanley Backlund
//10/5/2018
//CST-236
require_once 'dbconnect.php';
class UserDataService{
    function findByFirstName($n){
        //returns array of queried personages
        $db = new dbconnect();
        $sql_query = "SELECT id, FIRST_NAME, LAST_NAME FROM users WHERE FIRST_NAME LIKE '%$n%'";
        $connection = $db->getConnect();
        $result = $connection->query($sql_query);
        if(!$result){
            echo "Error in sql query <br>";
        }
        if($result->num_rows == 0){
            return null;
        }
        else{
            $person_array = array();
            while($person = $result->fetch_assoc()){
                //print_r($person);
                //echo "<br>";
                array_push($person_array, $person);
            }
            return $person_array;
        }
    }
    function findbyfirstlastadd($n){
        //returns array of queried personages
        $db = new dbconnect();
        $sql_query = "SELECT users.id,FIRST_NAME,LAST_NAME,ADDRESS FROM users JOIN address on users.id = address.users_id WHERE FIRST_NAME LIKE '%$n%'";
        $connection = $db->getConnect();
        $result = $connection->query($sql_query);
        if(!$result){
            echo "Error in sql query <br>";
        }
        if($result->num_rows == 0){
            return null;
        }
        else{
            $person_array = array();
            while($person = $result->fetch_assoc()){
                //print_r($person);
                //echo "<br>";
                array_push($person_array, $person);
            }
            return $person_array;
        }
    }
    function findByLastName($n){
        //returns array of queried personages
        $db = new dbconnect();
        $sql_query = "SELECT id, FIRST_NAME, LAST_NAME FROM users WHERE LAST_NAME LIKE '%$n%'";
        $connection = $db->getConnect();
        $result = $connection->query($sql_query);
        if(!$result){
            echo "Error in sql query <br>";
        }
        if($result->num_rows == 0){
            return null;
        }
        else{
            $person_array = array();
            while($person = $result->fetch_assoc()){
                array_push($person_array, $person);
            }
            return $person_array;
        }
    }
}




?>