<?php
require_once 'dbconnect.php';
require_once 'C:\MAMP\htdocs\php2\utility\Product.php';
class productDataService{
   
    public function findByName($n){
        //returns array of queried personages
        $db = new dbconnect();
        $connection = $db->getConnect();
        $sql_query = "SELECT idProducts, name, price, unittype,picturepath, stock FROM products WHERE name LIKE '%$n%'";
        
        $result = $connection->query($sql_query);
        if(!$result){
            echo "Error in sql";
        }
        else{
           if($result->num_rows > 0){
               $product_array = array();
               //$productfetch = array();
               while($row = $result->fetch_assoc()){
                   //print_r($person);
                   //echo "<br>";
                   $p = new Product($row["idProducts"],$row["name"],$row["picturepath"], $row["price"], $row["unittype"], $row["stock"]);
                   //var_dump($p);
                   array_push($product_array, $p);
               }
               return $product_array;
            }
            else{
                echo "no results";
             }
        }
    }
    public function findByPrice($p){
        //returns array of queried personages
        $db = new dbconnect();
        $connection = $db->getConnect();
        $sql_query = "SELECT idProducts, name, price, unittype,picturepath, stock FROM products WHERE price LIKE '%$p%'";
        
        $result = $connection->query($sql_query);
        if(!$result){
            echo "Error in sql";
        }
        else{
            if($result->num_rows > 0){
                $product_array = array();
                //$productfetch = array();
                while($row = $result->fetch_assoc()){
                    //print_r($person);
                    //echo "<br>";
                    $p = new Product($row["idProducts"],$row["name"],$row["picturepath"], $row["price"], $row["unittype"], $row["stock"]);
                    //var_dump($p);
                    array_push($product_array, $p);
                }
                return $product_array;
            }
            else{
                echo "no results";
            }
        }
    }
}