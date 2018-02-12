<?php
$age = 60;
if ($age >= 18 AND $age <= 59){
    echo "Вам еще работать и работать";
}
elseif($age > 59 ){
    echo "Вам пора на пенсию";
}
elseif($age >= 0 AND $age <= 17){
    echo "Вам еще рано работать";
}
elseif($age == NAN or $age < 0 ){
    echo "Неизвестный возраст";
}
else {
    echo "Отдыхайте";
}