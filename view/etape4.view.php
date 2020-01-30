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
        
            <h4><a href="etape3.php"><img src="style/retour1.png" height="40" width="40"></a>  ATELIER PHP - Etape 4 
            <p class="pb-5 pt-5">QUIZZ: Serie de 5 questions</p>
        </div>
        <div class="card-body p-5" style="background:rgb(229, 231, 231);">
            <p class="card-text p-4"></p>
        </div>
    </div>
    <div class="card" style="float:top;height:220px; width: 500px; top:-240px; margin-left:75px;">
        <div class="card-body">
            <div class="row">
            <?php if($_SESSION['compteur'] <= 5){ ?>
                <div class="col-md-6">
                    Score: <?= $_SESSION['score'] ?>/20
                </div>
                <div class="col-md-6">
                   Question<?=  $_SESSION['compteur'] ?>: <br>
                   <?= $_SESSION['rand1'] = rand(1, 10) ?> *  <?= $_SESSION['rand2'] = rand(1, 10) ?>
                </div>
            </div>
            <div class="row mt-3">
           
                <form action="" method="post">
                <div class="row">
                    <div class="col-md-3">Reponse<?=  $_SESSION['compteur'] ?>:</div>
                    <div class="col-md-3"><input type="number" name="resultat" id="" required></div>
                    <div class="col-md-3 offset-3"><button type="submit" name="envoyer" class="btn btn-dark">Envoyer</button></div>
                </div>
                </form>
            <?php
                }else{
                    if ( $_SESSION['score'] < 10) {
                        info("Desole, votre score est ". $_SESSION['score'], "alert-danger");
                        echo '  <a href="etape4.php" class="btn btn-dark">Rejouer</a>';
                    } else {
                        info("Bravo, votre score est ". $_SESSION['score'], "alert-success");
                        session_destroy();
                        echo ' <a href="etape4.php" class="btn btn-dark">Rejouer</a>';
                    }
            }
            ?>
            </div>
        </div>
    </div>
    <script src="style/jquery.min.js"></script>
    <script src="style/bootstrap.min.js"></script>
</body>
</html>