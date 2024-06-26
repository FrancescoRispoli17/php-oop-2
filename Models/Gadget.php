<?php 
require_once __DIR__ . '/Traits/Product.php';

class Gadget{
    use Product;
    private string $category='gadget';
    
    public function getCategory(){
        return $this->category;
    }
}

?>