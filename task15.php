<?php
/**
 * Created by PhpStorm.
 * User: senpaikakashi
 * Date: 12.02.2018
 * Time: 12:32
 */

$a = 9; $b = 3;

$operator = "%";


    if ($operator == "+") {
        echo $a + $b;
    }
    elseif ($operator == "-") {
        echo $a - $b;
        }
    elseif ($operator == "/") {
        echo $a / $b;
    }
    elseif ($b == 0){
        echo "На ноль делить нельзя!";
    }
    elseif ($operator == "%") {
        echo $a % $b;
    }
   else {
        echo "Неизвестное число.";
   }

