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
 ?>