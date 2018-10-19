    <?php
require_once 'C:\MAMP\htdocs\php2\database\productDataService.php';
class productBusinessService
{
    
    public function __construct()
    {
        
    }
    
    public function getProductByName($n){
        $ds = new productDataService();
        $resultlist  =$ds->findByName($n);
        return $resultlist;
    }
    public function getProductByPrice($p){
        $ds = new productDataService();
        $resultlist  =$ds->findByPrice($p);
        return $resultlist;
    }
}

