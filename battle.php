<?php
session_start();

//include 'round.php';


// selection de celui qui commence
//$start = rand(1,2);
//if ($start%2) {  
// 
//}
// retrait de la premiere perte de pdv
$genius = rand(60,99);
$evil = rand(60,99);


//1 je tire au sort celui qui commence
//2 je prévois le coup spécial
//3 celui qui commence inflige des dégats
//4  l'adversaire lui inflige des dégâts en retour
//5  j'affiche les résultats
//6 je répète les étapes 3,4,5 jusqu'a ce q'un des protagonistes n'ai plus de pdv
//7 une fois qu'un personnage n'a plus de pdv j'indique le gagnant
//8 j'affiche le tableau des scores

$geniusscore["scoreG"]= range (1,4);

for ($i=0; $i < 4; $i++) { 
    $geniusscore["scoreG"][$i]=rand(5,18);
}
$geniusscore["scoreG"][3]=rand(15,28); 
shuffle($geniusscore);
    var_dump($geniusscore);

$evilscore["scoreE"]= range (1,4);

for ($i=0; $i < 4; $i++) { 
    $evilscore["scoreE"][$i]=rand(5,18);
}
$evilscore["scoreE"][3]=rand(15,28);    
    

shuffle($evilscore);
    var_dump($evilscore);

$totalscore["scoreT"]= range (1,4);
for ($i=0; $i < 4; $i++) { 
    $totalscore["scoreGT"][$genius][$i] = ($genius = $genius -$geniusscore[0][$i]);
    $totalscore["scoreET"][$evil][$i] = ($evil = $evil -$evilscore[0][$i]);
}
var_dump($totalscore);
echo array_sum ( $geniusscore ) .'<br>';
echo array_sum ( $evilscore );









?>