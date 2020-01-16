 <?php echo  "bonjour" . " " . $_GET['prenom'] . " " . $_GET['nom'] . " " . "je suis agé de" . " " . $_GET['age'] . "  " . "ans"?>

<?php

 foreach ($_GET as $key => $val){
     $_GET[$key] = htmlspecialchars($val);
     if ($val == 5){
         echo  "<h1> produit avec la meilleure vente </h1>";
     }elseif ($val == 10){
         echo "<h1> ce produit n' est plus disponible actuellement </h1>";
     }
//     echo substr($key, -2);

 }
 var_dump($_SERVER);

 echo 'Timestamp actuel : ' . time() . '<br>';
date_default_timezone_set('Europe/Paris');
 $date = date("d-m-Y");
 $heure = date("H:i");
 echo "Nous sommes le" .  $date . "et il est" . $heure;
 echo "<br>";
  $dtes = gmmktime(8, 30, 0, 1, 6, 2020);
echo "il y a " . $dtes . " " . "ecoulées depuis le 6/01/2020 à 8 h 30";
echo "<br>";
echo "la semaine dernier, nous etions le" . date("d/m/y", strtotime("-1 week "));
echo "<br>";
 $today = getdate();
var_dump($today);
echo"<br><br>";

//function getMinDate($date1, $date2){
//    $date11  = gmmktime($date1);
//    $date12 = gmmktime($date2);
//    if($date11 < $date12){
//        echo $date1 . "est plus ancienne que " . $date2 ;
//    }if($date11 > $date12){
//        echo  $date1 . "est plus recente que " . $date2 ;
//    }
//}
 ?>
 <form action="" method="post">
     <input type="date" name="date1" >
     <input type="date" name="date2" >
     <button type=""submit>envoyer</button>

 </form>
<?php

// if(isset($_POST['date1']) && isset($_POST['date2'])) {
//
//
//     $date1 = $_POST['date1'];
//     $date2 = $_POST['date2'];
//     $tmstp1 = strtotime($date1);
//     $tmstp2 = strtotime($date2);
//     if ($tmstp1 < $tmstp2) {
//         echo "le" . " " . $date1 . " " . "est plus vieux que le" . " " . $date2;
//     } elseif ($date2 < $date1) {
//         echo "le" . " " . $date2 . " " . "est plus vieux que le" . " " . $date1;
//
//     }
// }









function dateDifference($date_1 , $date_2 , $differenceFormat = '%a' )
{
    $datetime1 = date_create($date_1);
    $datetime2 = date_create($date_2);

    $interval = date_diff($datetime1, $datetime2);

    return $interval->format($differenceFormat);

}

if(isset($_POST['date1']) && isset($_POST['date2'])) {
 echo dateDifference($_POST['date1'], $_POST['date2']).'<br>';
}
                       //reference : &
$x = 4;
echo $x;
function multBy5(&$alpha){
    return $alpha *= 5;
}
multBy5($x);
echo $x;






echo password_hash('philippe', PASSWORD_DEFAULT);
echo"<hr>";
$hash = '420$2y$10$S7BdaiPkWqalRLv6dO4ie.EHD3t1KReQnYYOWKjvO7Kb4wBctjmuO';

