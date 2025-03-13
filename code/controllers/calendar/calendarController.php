<?php
//- On appel toutes les pages à qui le controller va donenr les instructions
require_once 'models/calendar/data.php';
include_once 'views/calendar/calendar_view.php';

//- Fonction pour vérifier si l'utilisateur à sélectionner un mois et une année (maintenant ou dans le passé grâce aux cookies)
function isFilterSet() {
    if(isset($_GET['month']) && isset($_GET['year'])){
        return true;
    }
    else return false;
}

//- Fonction pour calculer le moi précédent d'une date 'd'
function previousMonth($year, $month){
    if($month - 1 == 0){
        $pMonth = 12;
        $pYear = $year -1;
    }
    else{
        $iDate = new DateTime($year . '-' . $month - 1);
        $pMonth = $iDate->format('n'); //Mois précédent
        $pYear = $iDate->format('Y'); //Année précédente
    }
    return array($pYear, $pMonth);
}

//- Fonction pour calculer le moi suivant d'une date 'd'
function nextMonth($year,$month){
    if($month + 1 == 13){
        $nMonth = 1;
        $nYear = $year +1;
    }
    else{
        $iDate = new DateTime($year . '-' . $month + 1);
        $nMonth = $iDate->format('n'); //Mois suivant
        $nYear = $iDate->format('Y'); //Année suivante
    }
    return array($nYear, $nMonth);
}

//- Fonction qui détermine le nombre de cases vide qu'il faudra mettre au début du calendrier. Si le premier jour du mois est un mardi, il y aura 1 case vide
function emptyCase($sDay){
    switch ($sDay){
        case 'Monday': 
            return $vDay = 1;
        case 'Tuesday': 
            return $vDay = 2;
        case 'Wednesday': 
            return $vDay = 3;
        case 'Thursday': 
            return $vDay = 4;
        case 'Friday': 
            return $vDay = 5;
        case 'Saturday': 
            return $vDay = 6;
        case 'Sunday': 
            return $vDay = 7;
    }
}

//- Fonction qui retourne le nom d'une date 'd' en Français
function ymFrench($year, $month){
    $formatFrench = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
    $formatFrench->setPattern('MMMM yyyy');
    return $formatFrench->format(new DateTime($year . '-' . $month));
}

//-- Affichage des messages d'erreurs ou d'info
function errorMsg($msg){
    echo "<p class=\"error_msg\">$msg</p>";
}
?>