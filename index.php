<?php
    require_once __DIR__ . '/Models/Food.php';
    require_once __DIR__ . '/Models/Toy.php';
    require_once __DIR__ . '/Models/Gadget.php';

        $food=new Food('croccantini','felix','€5','#','cat');
        $food->setIngredients('pollo','tacchino');
        $toy=new Toy('pallina','aaa','€14','#','dog');
        $prodotti=[];
        $prodotti=[...$prodotti,...[$food]];
        $prodotti=[...$prodotti,...[$toy]];
        $filter=$prodotti;
        $has_animal=!empty($_GET['animal']);
        $animal=$_GET['animal'];

        if($has_animal){
            $animals=[];
            foreach($filter as $product){
                if($product->getAnimal()==$animal){
                    $animals[]=$product;
                    
                }
            }
            $filter=$animals;
        }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/84c04c9e02.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <title>oop 2</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Filter</h2>
                    <form action="index.php" method="GET" class="row align-items-center">
                        <div class="col-auto">
                            <select class="form-select" aria-label="Default select example" name="animal">
                                <option selected value="">animale</option>
                                <option value="dog">cane</option>
                                <option value="cat">gatto</option>
                            </select>
                        </div>
                        <div class="col-auto">
                            <select class="form-select" aria-label="Default select example" name="type">
                                <option selected value="">tipologia</option>
                                <option value="cibo">cibo</option>
                                <option value="giochi">giochi</option>
                                <option value="gadget">gadget</option>
                            </select>
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-primary">cerca</button>
                        </div>
                    </form>
                </div>
                <?php foreach($filter as $prodocts) :?>
                        <div class="col fs-4 fw-semibold">
                            <div><?php echo $prodocts->getName(); ?></div>
                            <div><?php echo $prodocts->getBrand(); ?></div>
                            <div><?php echo $prodocts->getPrice(); ?></div>
                            <div><?php echo $prodocts->getImg(); ?></div>
                            <?php if($prodocts->getAnimal()==='cat'): ?>
                                <div><i class="fa-solid fa-cat"></i></div>
                            <?php elseif($prodocts->getAnimal()==='dog'): ?>
                                <div><i class="fa-solid fa-dog"></i></div>
                            <?php endif; ?>
                        </div>
                <?php endforeach; ?>
            </div>
        </div>
    </body>
</html>