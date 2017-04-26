<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Partie 4 - Exercice 4</title>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="centered"> 
           <h1>Exercice 4</h1>
           <p>
                <?php 
//création d'une fonction qui prend deux variables en paramètre
                    function calc($numb, $ber)
                    {
//condition if/elseif/else qui, si premier paramètre est plus petit que second paramètre...
                       if ($numb < $ber) {
    //affiche:                          
                           echo 'Le premier nombre est plus petit';
//qui, si premier paramètre est plus grand que second paramètre...
                       }elseif ($numb > $ber) {
    //affiche:  
                           echo 'Le premier nombre est plus grand';
//sinon...
                       }else {
    //affiche: 
                           echo 'Les deux nombres sont identiques';
                       }
//on retourne
                       return; 
                    }
//initialisation de deux variables de type nombres :
                    $firstNumber = 8;
                    $secondNumber = 12;
//j'appelle la fonction avec mes deux variables à la place des paramètres
                    echo calc($firstNumber, $secondNumber);
               ?>
           </p>
        </div>
           <?php include("../nav/index.php"); ?>
    </body>
</html>