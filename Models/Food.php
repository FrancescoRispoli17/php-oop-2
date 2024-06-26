<?php 
require_once __DIR__ . '/Traits/Product.php';

class Food{
    use Product;
    private string $category='food';
    private array $ingredients=[];

    public function getCategory(){
        return $this->category;
    }
    public function getIngredients(){
        return $this->ingredients;
    }
    public function setIngredients(string ...$text){
        $this->ingredients=[$this->ingredients,...$text];
    }
}

?>