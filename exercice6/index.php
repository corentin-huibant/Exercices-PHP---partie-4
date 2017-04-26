<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Partie 4 - Exercice 6</title>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="centered"> 
           <h1>Exercice 6</h1>
           <p>
                <?php 
//initialisation de trois variables, deux de type chaine de caractères et une de type nombre
                    $name = 'HUIBANT';
                    $lastName = 'Corentin';
                    $age = 28;
//création d'une fonction qui prend trois variables en paramètre
                    function stri($paramOne, $paramTwo, $paramThree)
                    {
//initialisation d'une nouvelle variable qui est égale à la concaténation des trois variables au sein d'un phrase
                       $result = 'Bonjour ' . $paramOne . ' ' . $paramTwo . ', tu as ' . $paramThree . ' ans.';
//on retourne la nouvelle variable
                       return $result; 
                    }
//j'appelle ma fonction de concaténation qui prend en paramètre mes trois nouvelles variables
                    echo stri($name, $lastName, $age);
               ?>
           </p>
        </div>
           <?php include("../nav/index.php"); ?>
    </body>
</html>