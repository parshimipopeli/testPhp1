<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<h1 class="text-center  text-success"><?= 'je m\' appelle philippe'; ?><?= " " ?><?= 25 ?></h1>
<?php

$nom = 'Lamorski';
$prenom = 'Philippe';
$age = '46';
echo 'mon non est :' . " " . $nom . " " . $prenom . " " . "je suis agé de :" . " " . $age . " " . "ans" . " ";
echo gettype($nom);
$null = null;
echo gettype($null);

echo "<hr>"
?>
<br>
<?php
$variable = "bonjour";
?>
<?php
$variable .= $nom;
?>
<?= $variable ?>
<br>
<?php
$nbre1 = 23;
$nbre2 = 12;
$somme = $nbre1 - $nbre2;
echo $somme;
$somme -= 5;
echo $somme;

echo ++$somme;

echo ++$somme;

echo --$somme;
?>
<br><br><br>

<?php
$connected = false;
//if($connected){
//    echo 'vous etes connecté';
//}
//else{
//   echo 'vous n etes pas  connecté';
//}
$isGranted = true;
//if ($isGranted && $connected){
//    echo '<p class="text-center">ok tu peus rentré</p>';
//}
//
//else{
//    echo '<p class="text-center"> desolé entrée interdite';
//}
if ($connected) {
    echo '<p class="text-center">Vous êtes connécté</p>';
}
if ($isGranted) {
    echo '<p class="text-center">Vous êtes  autorisé</p>';
} elseif ($connected && $isGranted) {
    echo '<p class="text-center">Bienvenue</p>';
} else {
    echo '<p class="text-center">Vous n\' etes ni connecté ni droit d\' accés</p>';
}

?>
<br><br>
<?php
$nbr = 3;
if ($nbr >= 18) {
    echo ' <p class="text-center">ok bienvenue</p>';
} else {
    echo ' <p class="text-center">entrée interdite</p>';

}

var_dump(1 === "1");
var_dump(1 != 1);
define("constante", 10); //declarer une constante
define("constante", 12);
const constante = 14; //declarer aussi une constante
echo constante;
echo __LINE__; // savoir a quelle ligne on a fait l echo
echo __FILE__; // savoir dans quel fichier  on se trouve
?>
<br><br><br>
<form action="" method="post">

    <input type="number" name="age" placeholder="Entrez votre age">
</form>
<?php
$tonAge = $_POST['age'];

if ($tonAge >= 60) {

    echo '<p class="text-center text-success display-1">Tu es à la retraite !</p>';
} elseif ($tonAge >= 18) {
    echo '<p class="text-center text-danger display-3">Tu es encore en activité !</p>';
} else {
    echo '<p class="text-center text-primary display-4">Tu ne travailles pas encore !</p>';
}


?>
<br><br><br>
<?php
$ok = false;
$a = 5;
$b = 100;
if (($b >= 5 && $b <= 20) || $ok) {
    echo ' ok ';
} else {
    echo ' pas ok';
}


?>
<br><br><br><br>


<form action="" method="post">

    <input type="number" name="n" placeholder="Entrez un nombre">
</form>
<?php
$nbres = ($_POST['n'] >= 0) ? 'true' : 'false';
echo $nbres;
?>
<form action="" method="post">

    <input type="number" name="p" placeholder="Entrez un nombre">
</form>
<?php

$x = $_POST['p'];

if ($x > 0):?>
    <p class="p1">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
<?php
else:

    ?>
    <br><br>


    <p class="p2">bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb</p>
<?php endif ?>



<hr>



<?php
$modePayement = "bank";
switch ($modePayement) {
    case "cheque":
        echo "vous devez 15 euros";
        break;
    case "paypal":
        echo "vous devez 10 euros";
        break;
    case "bank":
        echo "vous devez 5 euros";
        break;
    default:
        echo "vous devez 50 euros !";
}
//die();
echo"<hr>"
?>

<br><br><br>

<?php
$loop = 0;
while ($loop < 28) {
    if ($loop % 2 == 0) {
        echo '<p class="text-center  text-success display-3"><u>Tchao </u> </p>';
        $loop++;
    }
    echo '<p class="text-center  text-danger display-4"><u>Manu </u> </p>';

    $loop++;


}
var_dump($loop);
echo"<hr>"
?>
<br><br><br>

<!--les tableaux indexé-->


<?php
$fruit = ["pomme", "poire", "cerise", "orange", "clementine"];
print_r($fruit);

        ;                        //parcourir un tableau avec la boucle for
for ($i = 0; $i<count($fruit); $i++) {

    if($i == 1){


        echo "<p class='text-center bg-danger'>" . $fruit[$i] ."</p>";
        echo"<hr>";
break;
    }
    echo "<p class='text-center'>" . $fruit[$i] ."</p>";
}
echo $fruit[2] ;
array_push($fruit, "fraise");
print_r($fruit);
echo "il y a " . count($fruit) . " " . "fruits dans mon tableau";
echo"<hr>";
array_push($fruit, "grenade", "pasteque", "litchee");
print_r($fruit);

echo "il y a " . count($fruit) . " " . "fruits dans mon tableau";
echo"<hr>";


echo "<ul>"     ;                        //parcourir un tableau avec la boucle for
for ($i = 0; $i<count($fruit); $i++) {
    echo "<li>" . $fruit[$i] .  "</li>";

}
echo "</ul>";



echo"<hr>"

?>

<br><br><br>

<?php
$tab = ["toto" => "oui",
    "tata" => "non"];
echo $tab["tata"];


?>



                                <!--parcourir un tableau avec foreach-->
<?php
$prenoms = ["thomas", "philippe", "bruno", "steven", "olivier"];
foreach ($prenoms as $element) {
    echo "<p class='text-center'>" . $element . "</p>" ;
}
echo"<br>";

print_r($prenoms); // pour voir le tableau. Array ( [0] => thomas [1] => philippe [2] => bruno [3] => steven [4] => olivier ) non
echo"<br>";
foreach ($prenoms as $key => $val) {
    echo "<p class='text-center'>" . $key . "=>" . $val . "</p>" ;
}
echo "<hr>";
?>
<br>
<?php
$personnage = [
    "nom" =>"Lamorski",
    "prenom"=>"Philippe",
    "adresse"=>"29 residence la roseraie",
    "code postale"=>62122,
    "ville"=>"Lapugnoy"
    ];
print_r($personnage);

foreach ($personnage as $key=>$val) {
    echo "<p class='text-center'>" . "<strong>" . $key . "</strong>" . "  " . "=>" ." " .  $val . "</p>" ;


   if ($key == "prenom" ){
       echo "<p class='text-center'>" . "<strong>" . $key . "</strong>" . "  " . "=> <span style='color: #b92458;'>" .  $val . "</span>" . "</p>" ;
   }
}
echo"<hr>";
var_dump($personnage);
echo"<hr>";
$personnage['genre'] = "homme";
$personnage['age'] = 47;

print_r($personnage);
var_dump($personnage);
echo"<hr>";
echo"<hr>";
echo"<hr>";
echo"<hr>";

                                  //tableau multidimentionnel

$eleves = [
    "thomas" => [
        "math" => 13,
        "francais" => 17,
        "anglais" => 5
    ],
    "philippe" => [
        "math" => 11,
    "francais" => 18,
    "anglais" => 20
    ],
    "steven" =>[
    "math" => 12,
    "francais" => 18,
    "anglais" => 5,
],
    "bruno" =>[
        "math" => 19,
        "francais" => 15,
        "anglais" => 15,
        ],
    "olivier" =>[
        "math" => 10,
        "francais" => 11,
        "anglais" => 8,
    ],
];


foreach($eleves as $nom => $infos) {
    echo   $nom  . ' :<br>';
    foreach ($infos as $key => $val) {
        echo $key . ' : ' . $val . '<br>';
    }
}

?>



</body>
</html>