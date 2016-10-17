<?php

$heigth=['Jonh1'=>170,'Jonh2'=>170,'Jonh3'=>170];
print_r($heigth);
echo '<hr>The Height = ';
echo $heigth['Jonh1'];
echo '<hr>';
foreach ($heigth as $key => $value) {
    echo $key.' : '.$value.'<hr>';
}
