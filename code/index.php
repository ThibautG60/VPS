<?php 
/* FICHIER DE REDIRECTION BASIQUE */
require_once 'utils/php_errors.php'; // On charge le fihcier PHP pour afficher les erreurs PHP

switch ($_SERVER['REDIRECT_URL']){
    case '/Mentions';
        include_once 'views/Portfolio/mentions.php'; 
        break;
    case '/robots.txt';
        include_once 'robots.txt'; 
        break;
    default: 
        include_once 'views/Portfolio/accueil.php'; 
}
?>