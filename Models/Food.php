<?php 
require_once __DIR__ . '/Traits/Product.php';

class Food{
    use Product;
    private string $type='food';
    private array $ingredients=[];

    public function getType(){
        return $this->type;
    }
    public function getIngredients(){
        return $this->ingredients;
    }
    public function setIngredients(string ...$text){
        $this->ingredients=[$this->ingredients,...$text];
    }
}

?>