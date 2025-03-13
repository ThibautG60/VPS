<?php
    //- On prend la listes des events contenu dans le json
    $jsonData = json_decode(file_get_contents('assets/calendar/events.json'), true); // On va chercher le fichier bdd
    //- Fonction pour vérifier si une date correspond à un event
    function isEvent($date){
        global $jsonData;
        if (isset($jsonData)) {
            foreach($jsonData['evenements'] as $event){
                if($date == $event['date'])return true;
            }
        }
    }

?>