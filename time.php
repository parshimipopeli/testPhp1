<?php







?>


<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>Timestamp</h1>
        <?php
            echo 'Timestamp actuel : ' .time(). '<br>';
            echo 'Timestamp actuel : ' .time(). '<br>';
            echo 'Timestamp actuel (avec mktime()) : '.mktime(). '<br>';
            $t1 = mktime(8, 30, 0, 1, 25, 2019);
            $gmt1 = gmmktime(8, 30, 0, 1, 25, 2019);
            echo 'Timestamp 25 janvier 2019 08h30 (GMT+1) : ' .$t1. '<br>';
            echo 'Timestamp 25 janvier 2019 08h30 (GMT) : ' .$gmt1. '<br>';

        ?>
        <p>Un paragraphe</p>
    </body>
</html>
 