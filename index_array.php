<?php 

$mois = array ('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');

echo $mois[2]. '<br>';
echo $mois[5]. '<br>';

$mois[7]="Août";
echo $mois[7]. '<br>';

$departement = array ();
$departement['02']="Aisne";
$departement[59]="Nord";
$departement[60]="Oise";
$departement[62]="Pas de Calais";
$departement[80]="Somme";
var_dump($departement). '<br>';

echo $departement[59]. '<br>';

$departement[51]="Marne";
var_dump($departement). '<br>';

for ($i=0 ; $i<count ($mois); $i++){
	echo $mois[$i].' <br>';
}

{
	echo implode (', ',$departement). '<br>';
}


foreach ($departement as $key => $value) {
	echo 'Le département '.$key. ' a le numéro ' .$value. '<br>';
}
	
?>