<?php

    session_start();

   if (!isset($_POST['envoyer'])) {
        $_SESSION['rand1'] = rand(1, 10);
        $_SESSION['rand2'] = rand(1, 10);
        $_SESSION['compteur'] = 1;
        $_SESSION['score'] = 0;
   }

    if ( $_SESSION['compteur'] <= 5) {
        if (isset($_POST['envoyer'])) {
            if($_POST['resultat'] == ($_SESSION['rand1']*$_SESSION['rand2'])){
                $_SESSION['score'] += 4 ;
            }
    
            $_SESSION['compteur']++;
        }
    }

    function info($value, $class){
        echo "<div class='alert $class alert-dismissible fade show' role='alert'>
                $value
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
                </button>
            </div>";
    }

    require('view/etape4.view.php');


?>