<?php
    require_once __DIR__ . '/Models/Food.php';
    require_once __DIR__ . '/Models/Toy.php';
    require_once __DIR__ . '/Models/Gadget.php';

    try{
        $food=new Food('croccantini','felix','€5','#','cat');
        $food->setIngredients('pollo','tacchino');
        $toy=new Toy('pallina','aaa','€14','#','dog');
        var_dump($food);
    }catch(Exception $error){
        echo $error->getMessage();
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
                <div>
                    <div><?php echo $food->getName() ?></div>
                    <div><?php echo $food->getBrand() ?></div>
                    <div><?php echo $food->getPrice() ?></div>
                    <div><?php echo $food->getImg() ?></div>
                    <div><?php if ($food->getAnimal() =='cat'):?><i class="fa-solid fa-cat"></i>
                        <?php elseif ($food->getAnimal() =='dog'):?><i class="fa-solid fa-dog"></i>
                        <?php endif; ?>
                    </div>
                </div>
                <div>
                    <div><?php echo $toy->getName() ?></div>
                    <div><?php echo $toy->getBrand() ?></div>
                    <div><?php echo $toy->getPrice() ?></div>
                    <div><?php echo $toy->getImg() ?></div>
                    <div>
                        <?php if ($toy->getAnimal() =='cat'):?><i class="fa-solid fa-cat"></i>
                        <?php elseif ($toy->getAnimal() =='dog'):?><i class="fa-solid fa-dog"></i>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>