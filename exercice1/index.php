<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Partie 4 - Exercice 1</title>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="centered"> 
                <h1>Exercice 1</h1>
                <p>
                     <?php 
     //création d'une fonction veritas qui prend en paramètre la variable $true
                         function veritas($true)
                         {
     //on retourne la variable $true
                            return $true; 
                         }
     //initialisation d'une nouvelle variable booléenne qui est égale à true
                         $truest = true;
     //affiche la fonction veritas avec la nouvelle variable en paramètre (affiche 1)
                         echo veritas($truest);
                     ?>
                </p>
           </div>
           <?php include("../nav/index.php"); ?>
    </body>
</html>