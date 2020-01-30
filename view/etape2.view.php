<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/main.css">
    <title>Etape 2</title>
</head>
<body>
<div class="row container pt-5">
    <div class="col-md-6">  
        <div class="card" >
            <div class="card-header text-white pb-5" style="background:rgb(31, 30, 30);">
            
                <h4><a href="etape1.php"><img src="style/retour1.png" height="40" width="40"></a>  
                ATELIER 1 PHP - Etape 2 
                <a href="etape3.php"><img src="style/suivant.png" height="40" width="40"></a>    
            </h4><br>
                <p class="pb-5">Afficher une table de multiplication</p> 
                
            </div>
            <div class="card-body p-5" style="background:rgb(229, 231, 231);">
                <p class="card-text p-5"></p>
                <p class="card-text p-5"></p>
            </div>
        </div>
        <div class="card" style="float:top; width: 480px; top:-370px; margin-left:15px;">
            <div class="card-body">
                Merci de selectionner la table que vous voulez consulter: <br>
                <form action="" method="post" class="mt-3">
                    <div class="row">
                        <div class="col-md-6">
                            <?php checkboxPerso(5, 1); ?>
                        </div>
                        <div class="col-md-6">
                            <?php checkboxPerso(5, 6); ?>
                        </div>
                    </div>
                    <div class="pull-right mt-4">
                    <button type="reset" >Annuler</button>
                    <button type="submit" name="produit">Voir la table</button>    
                    </div> 
                </form>
            
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row pl-5 ml-3">
        <?php affichageMultiplication("produit"); ?>
        </div>
    </div>
</div>
</body>
</html>