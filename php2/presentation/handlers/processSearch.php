<?php
//Search Handler
//Stanley Backlund
//10/5/2018
//CST-236

require_once '../../businessServices/productBusinessService.php';
///////////////////fetch from form/////////////////////
$searchtype= addslashes($_GET['searchtype']);
////////////////calls use of the necessary data service//////////////////////////
$pbs = new productBusinessService();
$products = array();//array for search by name
$productsp = array(); //array for search by price
/////////////////////////determine which form is called/////////////////////
if($searchtype == 1){
    $name= addslashes($_GET['namesearch']);
    //$uds->findByFirstName($firstname);
    $products = $pbs->getProductByName($name);
    
}
if($searchtype ==2) {
    $price= addslashes($_GET['pricesearch']);
    //$uds->findByLastName($lastname)
    $productsp = $pbs->getProductByPrice($price);
    
}
?>
<html>
<h1>Here are your results</h1>
</html>
<?php
////////////////////display proper results for proper search fields//////////////////
if($products || $productsp){
    include ('../views/_displaySearchResults.php');
}

else{
    echo "did not find anything";
}
   
