<?php 
require_once __DIR__ . '/Traits/Product.php';

class Gadget{
    use Product;
    private string $type='gadget';
    
    public function getType(){
        return $this->type;
    }
}

?>