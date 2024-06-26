<?php 

trait Product{
    private string $name;
    private string $brand;
    private string $price;
    private string $img;
    private string $animal;

    public function __construct( $_name, $_brand, $_price, $_img, $_animal){
        $this->name=$_name;
        $this->brand=$_brand;
        $this->price=$_price;
        $this->img=$_img;
        $this->animal=$_animal;
    }

    public function getName(){
        return $this->name;
    }
    public function setName($text){
        $this->name=$text;
    }
    public function getBrand(){
        return $this->brand;
    }
    public function setBrand($text){
        $this->brand=$text;
    }
    public function getAnimal(){
        return $this->animal;
    }
    public function setAnimal($text){
        $this->animal=$text;
    }
    public function getPrice(){
        return $this->price;
    }
    public function setPrice($text){
        $this->price=$text;
    }
    public function getImg(){
        return $this->img;
    }
    public function setImg($text){
        $this->img=$text;
    }
    
}

?>