<?php 
require_once __DIR__ . '/Traits/Product.php';

class Toy{
    use Product;
    private string $category='toy';
    
    public function getCategory(){
        return $this->category;
    }
}

?>