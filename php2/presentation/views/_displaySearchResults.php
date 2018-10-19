<?php
//Partial file to show results in a more user friendly matter
//Stanley Backlund
//10/5/2018
//CST-236
?>
<style>
table, th, td {
   border: 1px solid black;
}
</style>
<html>
<table>
<thead>
<td>
Name
</td>
<td>
Price
</td>
</thead>
<?php 
if($products){
for($x = 0 ; $x< count($products);$x++){
   echo "<tr>";
   echo "<td>" . $products[$x]->getName() . "</td>"; 
   echo "<td>" . "$" . $products[$x]->getPrice() . "</td>"; 
   echo "</tr>";
}
}else if ($productsp){
    for($x = 0 ; $x< count($productsp);$x++){
    echo "<tr>";
    echo "<td>" . $productsp[$x]->getName() . "</td>";
    echo "<td>" . "$" . $productsp[$x]->getPrice() . "</td>";
    echo "</tr>";
    }
    }
    else{
        echo "Error no array detected";
    }
?>
</table>
