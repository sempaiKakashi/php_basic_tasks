<?php
/**
 * Created by PhpStorm.
 * User: senpaikakashi
 * Date: 10.02.2018
 * Time: 20:22
 */

$day = 6;

switch ($day){
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
     echo "Это рабочий день!";
     break;
    case 6:
    case 7:
        echo "Это выходной день!";
        break;
    default:
        echo "Неизвестный день.";
}