<!-- 
 this is a partial page
 purpose is to show a search form under the top menu
 even though the file extension is .php, all of the code on this page is html
 -->
 <?php require_once 'showTopMenu.php';?>
 <link rel="stylesheet" type="text/css" href="form.css">
 <div class="form-container">

<h2>Search for a Soldier</h2>

<form action="../handlers/processSearch.php">
By Name:<input type="text" name="namesearch" method = "GET"></input><br>
<input type="hidden" name = "searchtype" value= "1"></input><br>
<button type="submit">Search</button>
</form>
<form action="../handlers/processSearch.php">
By Price:<input type="text" name="pricesearch" method ="GET"></input><br>
<input type="hidden" name = "searchtype" value= "2"></input><br>
<button type="submit">Search</button>
</form>
</div>

