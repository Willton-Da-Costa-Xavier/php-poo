<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heranca pt2</title>
</head>
<body>
    <pre>
        <?php
            require_once "Aluno.php";
            require_once "Bolsista.php";
            // $p1 = new Pessoa();
            // $v1 = new Visitante();
            // $v1->setNome("Willas");
            // $v1->setIdade(25);
            // $v1->setSexo("M");
            // print_r($v1);

            $a1 = new Aluno();
            $a1->setNome("Pedro");
            $a1->setMatricula("1111");
            $a1->setIdade(18);
            $a1->setSexo("M");
            $a1->setCurso("Informatica");
            $a1->pagarMensalidade();
            print_r($a1);

            $b1 = new Bolsista();
            $b1->setMatricula(12);
            $b1->setNome("Mateus");
            $b1->setBolsa(12.5);
            $b1->setCurso("Administracao");
            $b1->setIdade(20);
            $b1->pagarMensalidade();
            print_r($b1);
        
        ?>
    </pre>
</body>
</html>