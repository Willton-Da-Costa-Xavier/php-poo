<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimorfismo</title>
</head>
<body>
    <pre>
        <?php
        
            require_once "Mamifero.php";
            require_once "Reptil.php";
            require_once "Peixe.php";
            require_once "Ave.php";
            require_once "Kanguru.php";
            require_once "Cachoro.php";
            require_once "Cobra.php";
            require_once "Tartaruga.php";
            require_once "GoldFish.php";
            require_once "Arara.php";

            $m = new Mamifero();
            $a = new Ave();
            $r = new Reptil();
            $k = new Kanguru();
            $c = new Cachoro();
            $t = new Tartaruga();

            // $m->locomover();
            // $k->locomover();
            // $c->locomover();
            // $t->locomover();

            $m->emitirSom();
            $c->emitirSom();
            $k->emitirSom();
           
        
        ?>
    </pre>
</body>
</html>