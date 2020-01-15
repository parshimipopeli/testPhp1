

<?php
$tab1 = ['ali', 'nicolas', 'fiona', 'roger'];
$tab2 = ['philippe', 'thomas', 'bruno', 'steven', 'olivier'];
$tab = array_merge($tab1, $tab2); // concaténer deux ou trois tableaux
var_dump($tab);

$tabNbre = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];
$result = array_sum($tabNbre); // additionner les valeurs d un tableau
$result1 = array_product($tabNbre); // multiplier lea valeurs d un tableau
var_dump($result);
var_dump($result1);

$tabElements = array_slice($tab2, 2, 3 );
var_dump($tabElements); // retourner des elements d un tableau

$doublons = [1, 3, 5, 8, 1, 4, 6, 3, 5, 8, 4, 6 ];
$suppDoublons = array_unique($doublons); // supprimer les doublons d un tableau
var_dump($suppDoublons);


$reverse = array_reverse($tab1);
var_dump($reverse); // inverser les elements d un tableau

$moi = [
        'NOM' => 'lamorski',
    'PRENOM'=> 'philippe'
        ];
$changeKey = array_change_key_case($moi, CASE_LOWER); //
var_dump($changeKey);

function getFormatedString($chaine):string
{
    return "<span class='text-success'>" . str_replace("t", "s", $chaine) . "</span>";

}
$appliFonction = array_map("getFormatedString" , $tab2);
var_dump($appliFonction);