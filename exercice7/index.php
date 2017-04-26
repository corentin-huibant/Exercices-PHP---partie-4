<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Partie 4 - Exercice 7</title>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="centered"> 
           <h1>Exercice 7</h1>
           <p>
                <?php 
//initialisation de deux variables :
                    $gender = 'Man';
                    $age = 28;              
//création d'une fonction qui prend deux variables en paramètre
                    function verif($paramOne, $paramTwo)
                    {
//condition if/elseif qui, si le premier paramètre est égale à 'Man' et que le deuxième paramètre est supérieur à 18
                       if (($paramOne = 'Man') && ($paramTwo >= 18)) {
                           //affiche :
                           echo 'Vous êtes un homme et vous êtes majeur';
//sinon, si le premier paramètre est égale à 'Man' et que le deuxième paramètre est inférieur à 18
                       }elseif (($paramOne = 'Man') && ($paramTwo < 18)) {
                           //affiche :
                           echo 'Vous êtes un homme et vous êtes mineur';
//sinon, si le premier paramètre est égale à 'Woman' et que le deuxième paramètre est supérieur à 18
                       }elseif (($paramOne = 'Woman') && ($paramTwo >= 18)) {
                           //affiche :
                           echo 'Vous êtes une femme et vous êtes majeur';
//mais encore, si le premier paramètre est égale à 'Woman' et que le deuxième paramètre est inférieur à 18
                       }elseif (($paramOne = 'Woman') && ($paramTwo >= 18)) {
                           //affiche :
                           echo 'Vous êtes une femme et vous êtes mineur';
                       }
                    }
//j'appelle la fonction avec mes deux premières variables, $gender et $age, à la place des paramètres
                    echo verif($gender, $age);
               ?>
           </p>
        </div>
           <?php include("../nav/index.php"); ?>
    </body>
</html>