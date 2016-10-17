<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
}else{
    echo "Today isn't GOOD";
}
?>