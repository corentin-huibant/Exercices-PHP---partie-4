<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Partie 4 - Exercice 8</title>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="centered"> 
           <h1>Exercice 8</h1>
           <p>
                <?php 
//initialisation de trois variables de type nombres :
                    $firstNumber = 8;
                    $secondNumber = 28;
                    $thirdNumber = 14;
//création d'une fonction qui prend trois variables en paramètre
                    function calcul($paramOne, $paramTwo, $paramThree)
                    {
                        $result = $paramOne + $paramTwo + $paramThree;
                        return $result;
                    }
//j'appelle la fonction avec mes trois premières variables de type nombre à la place des paramètres
                    echo calcul($firstNumber, $secondNumber, $thirdNumber);
               ?>
           </p>
        </div>
           <?php include("../nav/index.php"); ?>
    </body>
</html>