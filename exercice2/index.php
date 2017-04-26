<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Partie 4 - Exercice 2</title>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="centered"> 
           <h1>Exercice 2</h1>
           <p>
               <?php 
//création d'une fonction veritas qui prend en paramètre la variable $empty
                    function stri($empty)
                    {
//on retourne la variable $empty
                       return $empty; 
                    }
//initialisation d'une nouvelle variable de type chaine de caractères
                    $stri = 'une chaine de caractères';
//j'affiche la fonction stri qui prend en paramètre ma nouvelle variable
                    echo stri($stri);
                ?>
            </p>
        </div>
            <?php include("../nav/index.php"); ?>
    </body>
</html>