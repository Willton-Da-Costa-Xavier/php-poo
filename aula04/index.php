<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
        
            require_once "ContaBanco.php";
            $p1 = new ContaBanco();
            $p2 = new ContaBanco();
            $p1->abrirConta("CC");
            $p1->setDono("Jubileu");
            $p1->setnumConta(111);
            $p2->abrirConta("CP");
            $p2->setDono("Creuza");
            $p2->setnumConta(222);

            $p1->depositar(300);
            $p2->depositar(500);

            $p2->sacar(100);
            $p1->sacar(338);
            $p2->sacar(530);
            $p1->mensalidade();
            $p2->mensalidade();

            $p1->fecharConta();
            $p2->fecharConta();
            print_r($p1);
            print_r($p2);
        ?>
    </pre>
</body>
</html>