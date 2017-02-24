<?php

// fonction pour décrémenter les dégats et déclarer le vainqueur du round
function match($round){
    $genius = $genius -(rand(5,18));
    $evil = $evil -(rand(5,18));
    if ($genius > $evil) {
        echo '<div style="color:green;">'."Genius win the $round round".'</div>';
    }
    else {
        echo '<div style="color:green;">'."Evil win the $round round".'</div>';
    }
        
// fonction pour envoyer le super pouvoir
//function superpower($superpower){

//}


?>