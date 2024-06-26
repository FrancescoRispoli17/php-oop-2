<?php 
require_once __DIR__ . '/Traits/Product.php';

class Toy{
    use Product;
    private string $type='toy';
    
    public function getType(){
        return $this->type;
    }
}

?>