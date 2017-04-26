<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Partie 4 - Exercice 3</title>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="centered"> 
           <h1>Exercice 3</h1>
           <p>
                <?php 
//création d'une fonction qui prend deux variables en paramètre
                    function stri($concat, $concat2)
                    {
//initialisation d'une nouvelle variable qui est égale à la concaténation des deux variables sus-mentionnées
                       $result = $concat . ' ' . $concat2;
//on retourne la nouvelle variable
                       return $result; 
                    }
//initialisation de deux variables de type chaine de caractères
                    $firstString = 'Une chaine';
                    $secondString = 'de caractères.';
//j'appelle ma fonction de concaténation qui prend en paramètre mes deux variables de type chaine de caractères
                    echo stri($firstString, $secondString);
               ?>
           </p>
        </div>
           <?php include("../nav/index.php"); ?>
    </body>
</html>