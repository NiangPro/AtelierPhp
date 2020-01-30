<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/main.css">
    <title>Document</title>
</head>
<body>

    <div class="card" style="width: 550px; margin-left:50px;margin-top:80px; ">
        <div class="card-header text-white pb-5" style="background:rgb(31, 30, 30);">
        
            <h4><a href="etape2.php"><img src="style/retour1.png" height="40" width="40"></a>  ATELIER 1 PHP - Etape 3 
            <a href="etape4.php"><img src="style/suivant.png" height="40" width="40"></a></h4><br>
            <p class="pb-5">Afficher une table de multiplication</p>
        </div>
        <div class="card-body p-5" style="background:rgb(229, 231, 231);">
            <p class="card-text p-4"></p>
        </div>
    </div>
    <div class="card" style="float:top;height:220px; width: 500px; top:-240px; margin-left:75px;">
        <div class="card-body">
            Merci de selectionner la table que vous voulez consulter: <br>
            <form action="" method="post" class="mt-3">
                <?php  genereOption(1, 10, "table"); ?>
                <div class="pull-right mt-4">
                <button type="reset" >Annuler</button>
                <button type="submit" name="produit">Voir la table</button>    
                </div> 
                <?php if(isset($_POST['produit']) || isset($_POST['verifier'])) {
                        if(isset($_POST['produit'])){
                        $_SESSION['valeur'] = $_POST['table'];
                        $_SESSION['nombre']  = rand(1, 10);} ?>
                <div class="card col-md-10" style="margin-left:650px;margin-top:-260px;">
                    <div class="card-header">
                    <a href="etape3.php"><img src="style/retour.png" height="30" width="30"></a>Multiplication aleatoire</div>
                    <div class="card-body text-center">
                  
                           <form method="post" action="">
                                <?= $_SESSION['valeur'].' x  '.$_SESSION['nombre'].'  =' ?>
                               <input type="number" name="resultat" required>
                                <button type="submit" name="verifier">Verifier</button>
                            </form>
                       <?php 
                        if (isset($_POST['verifier'])) {
                            if ($_POST['resultat'] == ($_SESSION['valeur']*$_SESSION['nombre'])) {
                            echo '<br><div class="alert alert-success mt-3"> Bravo, la reponse est '.$_SESSION['valeur']*$_SESSION['nombre'].' </div>';
                            }else{
                                echo '<br><div class="alert alert-danger mt-3"> Desole, la reponse etait '.$_SESSION['valeur']*$_SESSION['nombre'].'</div>';
                            }
                        }
                    }?> 
                  </div>
                </div>   
            </form>
        </div>
    </div>
</body>
</html>