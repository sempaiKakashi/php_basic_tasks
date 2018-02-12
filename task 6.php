<?php
$age = 60;
if ($age >= 18 AND $age <= 59){
    echo "Вам еще работать и работать";
}
elseif($age > 59 ){
    echo "Вам пора на пенсию";
}
else{
    echo "Отдыхайте";
}