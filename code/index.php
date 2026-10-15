<?php 
/* FICHIER DE REDIRECTION BASIQUE */
require_once 'utils/php_errors.php'; // On charge le fihcier PHP pour afficher les erreurs PHP

//-- On redirige vers le bon controller --
if($_SERVER['REDIRECT_URL'] == "/"){ // Si il n'y a pas de catégories dans l'URL, on charge l'accueil
    include_once 'views/Portfolio/accueil.php';
}
else{ // Sinon on charge le controller adapté à la page
    $link = 'controllers/controller_'.$_SERVER['REDIRECT_URL'].'.php';

    switch ($_SERVER['REDIRECT_URL']){ // Si la page demandé fait parti de cette liste, on affiche la page (Pas besoin de controller étant donné qu'il n'y a aucun calcul à faire)
        case '/Mentions';
            include_once 'views/Portfolio/mentions.php'; 
            break;
        case '/robots.txt';
            include_once 'robots.txt'; 
            break;
        default: // Sinon, on importe le controller correspondant
            if (file_exists($link)) {
                include_once $link; // On importe le controller correspondant
            } else {
                include_once 'views/Portfolio/accueil.php'; 
            }
            break;
    }
}
?>