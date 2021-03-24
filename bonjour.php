<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- /LIER AUX FICHER INDEX.PHP -->

    <p>
        <?php 
            if (isset($_GET["nom"]) &&  isset($_GET["prenom"]) &&  isset($_GET["repeter"])){

                $nbRepetitions = (int) $_GET["repeter"]; // pour etre sur que la variable est un nombre et non pas un texte 

                if ($nbRepetitions < 20) // exo supplémentaire faire un nombre qui n'est pas inférieur au nombre que l'on veux 
                {
                    for ($repetition = 0 ; $repetition < $_GET["repeter"];$repetition++){

                        echo " <p> Bonjour ".$_GET["nom"]." ".$_GET["prenom"]."</p>";
                    }
                }
               

                
            }
            else
            {
                echo "Pas de nom ou de prenom défini !";
            }
        ?>
    </p>



</body>
</html>