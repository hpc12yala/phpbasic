<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $a = "PHP Basic";
        $b = 1;
        $c = 0.0;
        $d = TRUE;

        $f = array("Apple", "Orang", "Papaya");
        echo($a);
        echo '<hr>';
        echo($b);
        echo '<hr>';
        echo($c);
        echo '<hr>';
        echo($d);
        echo '<hr>';
//printf
//printf($b);
        printf("Training Yii2 PHP Framework");
        echo '<hr>';
        print_r($f);
        echo '<hr>';
        echo $f[0];
        echo '<hr>';
        $cars = array("Volvo", "BMW", "Toyota");
        $arrlength = count($cars);
        for ($x = 0; $x < $arrlength; $x++) {
            echo $cars[$x];
            echo "<hr>";
        }
        ?>
    </body>
</html>
