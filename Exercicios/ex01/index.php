<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicios</title>
</head>
<body>
    <pre>
        <?php 
            require_once "Video.php";
            require_once "Gafanhoto.php";
            require_once "Visualizacao.php";
            $v[0] = new Video("Aula 1 de POO");
            $v[1] = new Video("Aula 12 de PHP");
            $v[2] = new Video("Aula 15 de HTML5");

           $p[0] = new Gafanhoto("Maria", 25, "F", "Mar");
           $p[1] = new Gafanhoto("Creuza", 12, "M", "CRZ");
           $p[2] = new Gafanhoto("Fatima", 20, "F", "Fta");
            
           $vis[0] = new Visualizacao($p[0], $v[2]);
           $vis[1] = new Visualizacao($p[0], $v[1]);
           $vis[0] = new Visualizacao($p[0], $v[2]); 

           $vis[0]->avaliar();
           $vis[1]->avaliarPorc(85);
           print_r($vis);

        
        ?>
    </pre>
</body>
</html>